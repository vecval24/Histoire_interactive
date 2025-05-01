<template>
  <div class="min-h-screen bg-gradient-to-br from-purple-100 to-green-100 flex flex-col items-center p-10">
    <div class="w-full max-w-7xl">
      <h1 class="text-4xl font-bold text-center text-black mb-12 uppercase">Liste des histoires</h1>

      <div v-if="stories.length > 0" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div
          v-for="story in stories"
          :key="story.id"
          class="bg-white shadow-lg rounded-2xl p-6 flex flex-col justify-between transition-transform hover:scale-105"
        >
          <div>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">{{ story.title }}</h2>
            <p class="text-gray-600 text-center mb-6">{{ story.description }}</p>
          </div>
          <router-link
            :to="`/chapter/${story.firstChapterId}`"
            class="text-white font-semibold py-2 px-4 rounded-lg text-center mt-auto transition duration-300 hover:brightness-90"
            style="background-color: #064e3b;"
          >
            Commencer cette histoire
          </router-link>
        </div>
      </div>

      <div v-else class="text-center text-gray-700 mt-10">
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
