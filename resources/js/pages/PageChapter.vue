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
  <div v-if="loading" class="flex justify-center items-center h-64">
    <div class="text-xl text-indigo-300">Chargement du chapitre...</div>
  </div>
  
  <div v-if="error" class="bg-red-900 border border-red-700 text-red-200 px-4 py-3 rounded-lg relative my-6" role="alert">
    <strong class="font-bold">Erreur :</strong>
    <span class="block sm:inline"> {{ error.message || error }}</span>
  </div>

  <div v-if="data" class="page bg-gray-900 min-h-screen p-6 text-gray-300">
    <!-- Header avec titre -->
    <div class="header mb-8">
      <h1 class="title text-4xl font-bold text-purple-200 text-center uppercase">{{ data.title }}</h1>
      <!-- <div class="timer">{{ formatTime(time) }}</div> -->
    </div>

    <div class="spacer"></div>

    <!-- Zone de texte + choix -->
    <div class="menu max-w-4xl mx-auto bg-gray-800 shadow-2xl rounded-2xl p-8 border border-gray-700">
      <p class="text text-gray-300 text-lg mb-8 leading-relaxed font-medium">
        {{ data.content }}
      </p>

      <div class="border-t border-gray-700 pt-6 mt-6">
        <h3 class="text-xl font-semibold text-purple-300 mb-6">Que voulez-vous faire ?</h3>
        
        <ol class="choices space-y-4">
          <li v-for="(choice, i) in data.choices" :key="choice.id">
            <button 
              class="choice w-full text-left font-medium text-gray-300 py-4 px-5 rounded-lg border border-indigo-900 bg-gray-800 hover:bg-gray-700 hover:border-indigo-700 transition duration-300 flex items-center shadow-lg group"
              @click="goToNextChapter(choice.next_chapter_id)"
            >
              <span class="mr-4 flex-shrink-0 bg-indigo-900 text-indigo-200 w-10 h-10 rounded-full flex items-center justify-center text-sm font-bold shadow-inner group-hover:bg-indigo-800 transition-colors">{{ i + 1 }}</span>
              <span class="text-base group-hover:text-gray-100">{{ choice.text }}</span>
            </button>
          </li>

          <li v-if="data.choices.length === 0" class="mt-6">
            <button 
              class="choice w-full text-center font-bold text-gray-200 py-3 px-4 rounded-lg transition duration-300 hover:bg-indigo-800 shadow-lg"
              style="background-color: #4c1d95;"
              @click="onRestartClick"
            >
              Recommencer
            </button>
          </li>
          
          <li v-if="data.choices.length === 0" class="mt-3">
            <router-link 
              to="/" 
              class="choice w-full text-center block font-bold text-gray-400 py-3 px-4 rounded-lg border border-gray-700 hover:bg-gray-700 hover:text-gray-200 transition duration-300 shadow-lg"
            >
              Quitter
            </router-link>
          </li>
        </ol>
      </div>
    </div>
  </div>
</template>

<style scoped>
/* Animation fade */
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.8s ease;
}
.fade-enter-from, .fade-leave-to {
  opacity: 0;
}

/* Font mystérieuse (optionnel - décommentez si vous voulez utiliser une police spéciale) */
/*
@import url('https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@400;600;700&display=swap');

.page {
  font-family: 'Crimson Pro', serif;
}
*/
</style>