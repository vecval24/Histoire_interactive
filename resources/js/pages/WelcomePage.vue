<template>
  <div class="min-h-screen bg-gray-100 flex flex-col justify-center items-center p-6">
    <div class="max-w-2xl w-full space-y-8">
      <h1 class="text-4xl font-bold text-center text-indigo-700">Liste des histoires</h1>

      <div v-if="stories.length > 0" class="space-y-6">
        <div
          v-for="story in stories"
          :key="story.id"
          class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center transition hover:shadow-xl"
        >
          <h2 class="text-2xl font-semibold text-gray-800 mb-4">{{ story.title }}</h2>
          <p class="text-gray-600 text-center mb-6">{{ story.description }}</p>

          <router-link
            :to="`/chapter/${story.firstChapterId}`"
            class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg text-lg transition duration-300"
          >
            Commencer cette histoire
          </router-link>
        </div>
      </div>

      <div v-else class="text-center text-gray-600">
        Aucune histoire disponible.
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const stories = ref([
  {
    id: 1,
    title: 'Le Sentier du Silence',
    description: "Dans une forêt profonde, une trace sanglante t’attire. Tu devras choisir entre suivre l'inconnu ou rester en sécurité. Trois fins possibles...",
    firstChapterId: 1
  },
  {
    id: 2,
    title: 'La Clé Enchantée',
    description: "Une clé ancienne te conduit vers un monde magique… ou vers ta perte. Deux chemins, trois fins. Quelle porte ouvriras-tu ?",
    firstChapterId: 10
  },
  {
    id: 3,
    title: 'Mission sur Mars',
    description: "Une base en péril, une décision cruciale, et la survie en jeu. Ton choix déterminera le destin de la mission martienne.",
    firstChapterId: 20
  }
])
</script>
