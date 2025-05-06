<script setup>
import { ref, watchEffect, onMounted, onUnmounted } from "vue";
import { useRoute, useRouter } from "vue-router";
import { fetchJson } from "@/utils/fetchJson";

const route = useRoute();
const currentChapterId = ref(parseInt(route.params.id));

const data = ref(null);
const error = ref(null);
const loading = ref(false);

let interval;
const time = ref(getTimer());

watchEffect(async () => {
  if (!currentChapterId.value) return;

  loading.value = true;
  try {
    const res = await fetchJson(`/api/v1/chapters/${currentChapterId.value}`).request;
    data.value = res;
    error.value = null;
  } catch (err) {
    error.value = err;
    data.value = null;
  } finally {
    loading.value = false;
  }
});
// <script setup>
// import { onMounted, ref, watch } from "vue";
// import { useRoute, useRouter } from "vue-router";  // Assurez-vous d'utiliser les deux
// import { useFetchJson } from "../composables/useFetchJson";

// // Utilisation de useRoute pour accéder à l'id du chapitre depuis la route
// const route = useRoute();
// const router = useRouter();  // Pour la navigation

// const currentChapterId = ref(parseInt(route.params.id));  // Récupérer l'ID depuis la route

// let interval;
// const time = ref(getTimer());

// // // Charger les données depuis l'API en utilisant l'ID du chapitre
// const { data, error, loading } = useFetchJson({
//    url: `/api/v1/chapters/${currentChapterId.value}`,  // Utilisation de l'API pour charger le chapitre
// });


onMounted(() => {
  interval = setInterval(() => {
    if (data.value.choices.length !== 0) {
      time.value++;
    }
    localStorage.setItem("story-1-timer", time.value);
  }, 1000);
});

onUnmounted(() => {
  clearInterval(interval);
});

function getTimer() {
  const timer = localStorage.getItem("story-1-timer");
  return timer ? parseInt(timer) : 0;
}

// Fonction pour aller au prochain chapitre
function goToNextChapter(chapterId) {
  currentChapterId.value = chapterId;
  localStorage.setItem("story-1-current-chapter", chapterId);

  // Utilisation de router.push pour naviguer vers le prochain chapitre
  router.push(`/chapter/${chapterId}`);
}

function onRestartClick() {
  localStorage.setItem(`story-1-current-chapter`, 1);
  currentChapterId.value = 1;
  time.value = 0;
}

function formatTime(time) {
  const hours = Math.floor(time / 3600);
  const minutes = Math.floor((time % 3600) / 60);
  const seconds = time % 60;
  return `${hours.toString().padStart(2, "0")}:${minutes.toString().padStart(2, "0")}:${seconds.toString().padStart(2, "0")}`;
}
</script>

<template>
  <div>
    <div v-if="loading">Chargement du chapitre...</div>
    <div v-if="error" class="text-red-600">Erreur : {{ error.message || error }}</div>

    <div v-if="data" class="page">
      <!-- Ton contenu habituel ici -->
    </div>
  </div>

  <div v-if="!loading" class="page">
    <!-- Header avec titre + timer -->
    <div class="header">
      <h1 class="title">{{ data.title }}</h1>
      <div class="timer">{{ formatTime(time) }}</div>
    </div>

    <div class="spacer"></div>

    <!-- Zone de texte + choix -->
    <div class="menu">
      <p class="text">
        {{ data.content }}
      </p>

      <ol class="choices">
        <li v-for="(choice, i) in data?.choices" :key="choice.id">
          <button class="choice" @click="goToNextChapter(choice.next_chapter_id)">
            {{ i + 1 }}. {{ choice.text }}
          </button>
        </li>

        <li v-if="data.choices.length === 0">
          <button class="choice" @click="onRestartClick">
            Recommencer
          </button>
        </li>
        <li v-if="data.choices.length === 0">
          <router-link to="/" class="choice">Quitter</router-link>
        </li>
      </ol>
    </div>
  </div>
</template>

<style scoped>
/* Petite animation fade */
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.5s ease;
}
.fade-enter-from, .fade-leave-to {
  opacity: 0;
}
</style>
