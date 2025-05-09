# 📚 Histoires interactives

Ce projet propose plusieurs histoires interactives à choix multiples où les décisions de l'utilisateur influencent le déroulement et la fin du récit. Il est basé sur **Laravel** pour le backend et **Vue.js** pour le frontend.

## 🛠️ Backend — Laravel

- **API RESTful** : Le backend expose des routes API pour interagir avec les histoires, chapitres et choix.
- **Relations Eloquent** : Utilisation des relations `hasMany` / `belongsTo` entre histoires, chapitres et choix.
- **Validation avec FormRequest** : Validation centralisée et sécurisée des données reçues.
- **Migrations** : Création de tables via le système de migration Laravel.

## 💻 Frontend — Vue.js

- **SPA (Single Page Application)** : Application fluide sans rechargement de page.
- **Vue Router** : Navigation entre les vues (accueil, lecture, authentification).
- **Composition API & Composables** : Utilisation de `useFetchJson` et d'autres fonctions réactives.
- **Système de navigation interactive** : L'utilisateur choisis une histoire, lit un chapitre, sélectionne un choix, et est redirigé vers le chapitre suivant. Aux différentes fins, il peut recommencer l'histoire ou en choisir une autre en revenant à la page d'accueil.

## 🌟 Fonctionnalités principales

### 📖 Lecture interactive

- Chargement dynamique d'une histoire et de ses chapitres
- Affichage du contenu du chapitre courant
- Affichage des choix disponibles (liés à d'autres chapitres)
- Navigation conditionnelle en fonction du choix sélectionné
- Fin d'histoire : possibilité de recommencer ou quitter

## 🛠️ Modèle de données

### `stories` — Histoires

| Champ       | Type     | Description                     |
|-------------|----------|---------------------------------|
| id          | integer  | Identifiant unique              |
| title       | string   | Titre de l'histoire             |
| description | text     | Brève description de l'histoire |
| timestamps  | datetime | Dates de création/mise à jour   |

### `chapters` — Chapitres

| Champ      | Type      | Description                        |
|------------|-----------|------------------------------------|
| id         | integer   | Identifiant unique                 |
| title      | string    | Titre du chapitre                  |
| content    | text      | Contenu textuel du chapitre        |
| story_id   | foreignId | Référence à l’histoire associée    |
| timestamps | datetime  | Dates de création/mise à jour      |

### `choices` — Choix

| Champ            | Type      | Description                                 |
|------------------|-----------|---------------------------------------------|
| id               | integer   | Identifiant unique                          |
| text             | string    | Texte du choix visible par l'utilisateur    |
| chapter_id       | foreignId | Chapitre d’origine du choix                 |
| next_chapter_id  | foreignId (nullable) | Chapitre vers lequel mène le choix |
| timestamps       | datetime  | Dates de création/mise à jour               |

---

## 🚀 Installation

### Pré-requis

- PHP 8.2+
- Composer
- Node.js et npm
- SQLite 

### Étapes

1. **Cloner le dépôt**
   ```bash
   git clone https://github.com/votre-utilisateur/Histoire_interactive.git
   cd Histoire_interactive
    ```

2. **Installer les dépendances PHP**

   ```bash
   composer install
   ```

3. **Installer les dépendances JS**

   ```bash
   npm install
   ```

4. **Configurer l'environnement**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configurer SQLite**

   ```bash
   touch database/database.sqlite
   ```

   Modifier `.env` :

   ```
   DB_CONNECTION=sqlite
   ```

6. **Lancer les migrations**

   ```bash
   php artisan migrate
   ```

7. **Démarrer le backend et le frontend**

   ```bash
   composer run dev
   ```

---

## 🧰 Technologies utilisées

### Backend

* **Laravel 10+**
* **PHP 8.2**
* **SQLite** 

### Frontend

* **Vue.js 3**
* **Vue Router**
* **Tailwind CSS**
* **Vite**
