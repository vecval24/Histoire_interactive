let defaultBaseUrl = ""; // Valeur par défaut

// Fonction pour mettre à jour l'URL de base par défaut
export function setDefaultBaseUrl(url) {
  defaultBaseUrl = url;
}

// Dans fetchJson.js
let defaultHeaders = {};

// Fonction pour mettre à jour les en-têtes par défaut
export function setDefaultHeaders(headers) {
  defaultHeaders = headers;
}

// Ta fonction fetchJson
export function fetchJson(options) {
  const controller = new AbortController();

  let url = typeof options === "string" ? options : options.url;
  const method = options.method || (options.data ? "POST" : "GET");
  const headers = options.headers || defaultHeaders;
  const baseUrl = options.baseUrl || defaultBaseUrl; // Utilisation du baseUrl par défaut
  const timeout = options.timeout || 5000;

  const fullUrl = baseUrl + url;

  const fetchPromise = fetch(fullUrl, {
    method,
    headers: {
      "Content-Type": "application/json",
      ...headers,
    },
    body: options.data ? JSON.stringify(options.data) : undefined,
    signal: controller.signal,
  }).then(async (res) => {
    if (!res.ok) {
      const errorBody = await res.text();
      throw new Error(
        `Erreur API ${res.status}: ${res.statusText} – ${errorBody}`
      );
    }
    return res.json(); // Parse JSON response
  });

  // Timeout
  const timeoutId = setTimeout(() => controller.abort(), timeout);

  return {
    request: fetchPromise.finally(() => clearTimeout(timeoutId)),
    abort: () => controller.abort(),
  };
}
