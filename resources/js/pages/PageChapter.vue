<script setup>
import { ref, watchEffect, onMounted, onUnmounted } from "vue";
import { useRoute, useRouter } from "vue-router";
import { fetchJson } from "@/utils/fetchJson";

const route = useRoute();
const router = useRouter();  // Utilisation de useRouter pour la navigation
console.log('ID du chapitre dans l\'URL:', route.params.id);
// Déclare l'ID du chapitre actuel, qui est basé sur les paramètres de la route
const currentChapterId = ref(parseInt(route.params.id));

// Références pour les données du chapitre, l'erreur et l'état de chargement
const data = ref(null);
const error = ref(null);
const loading = ref(false);

// Fonction pour charger les données du chapitre depuis l'API
async function loadChapter() {
  if (!currentChapterId.value) return;

  loading.value = true;
  try {
    const res = await fetchJson(`/chapters/${currentChapterId.value}`).request;
    console.log('Données du chapitre:', res);
    data.value = res;
    error.value = null;
  } catch (err) {
    console.error('Erreur lors de la récupération des données:', err);
    error.value = err;
    data.value = null;
  } finally {
    loading.value = false;
  }
}

// Utiliser watchEffect pour recharger les données chaque fois que l'ID du chapitre change
watchEffect(() => {
  loadChapter();  // Appelle la fonction pour récupérer les données chaque fois que currentChapterId change
});

// Gestion du timer
let interval;
const time = ref(getTimer());

onMounted(() => {
  interval = setInterval(() => {
    if (data.value && data.value.choices.length !== 0) {
      time.value++;
    }
    localStorage.setItem("story-1-timer", time.value);
  }, 1000);
});

onUnmounted(() => {
  clearInterval(interval);  // Nettoie l'intervalle à la destruction du composant
});

// Fonction pour récupérer le temps stocké dans localStorage
function getTimer() {
  const timer = localStorage.getItem("story-1-timer");
  return timer ? parseInt(timer) : 0;
}

// Fonction pour naviguer vers le prochain chapitre
function goToNextChapter(chapterId) {
  currentChapterId.value = chapterId;
  localStorage.setItem("story-1-current-chapter", chapterId);
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
  <div v-if="loading">Chargement du chapitre...</div>
  <div v-if="error" class="text-red-600">Erreur : {{ error.message || error }}</div>

  <div v-if="data" class="page">
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
        <li v-for="(choice, i) in data.choices" :key="choice.id">
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
