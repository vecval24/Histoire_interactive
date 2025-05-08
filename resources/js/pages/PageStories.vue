<script setup>
import { useFetchJson } from "@/composables/useFetchJson";

const { data, error, loading } = useFetchJson({
  url: "/stories"
});
</script>

<template>
  <div class="page bg-gray-900 min-h-screen p-6 text-gray-300">
    <div class="max-w-6xl mx-auto">
      <h1 class="title text-4xl font-bold text-purple-200 text-center mb-4 tracking-wider">Histoires Mystérieuses</h1>

      <h2 class="subtitle text-xl text-indigo-300 text-center mb-8 italic">Des récits énigmatiques avec des fins différentes selon vos choix...</h2>

      <p class="paragraph text-center text-gray-400 mb-12">Choisissez votre destin...</p>

      <div v-if="loading" class="flex justify-center items-center h-64">
        <div class="text-xl text-indigo-300">Chargement des histoires...</div>
      </div>

      <div v-if="error" class="bg-red-900 border border-red-700 text-red-200 px-4 py-3 rounded-lg relative my-6" role="alert">
        <strong class="font-bold">Erreur :</strong>
        <span class="block sm:inline"> {{ error.message || error }}</span>
      </div>

      <div class="stories">
        <div v-if="data && data.length > 0" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div
            v-for="story in data"
            :key="story.id"
            class="bg-gray-800 shadow-2xl rounded-2xl p-6 flex flex-col justify-between transition-all duration-300 hover:scale-105 hover:shadow-indigo-900/30 border border-gray-700 hover:border-indigo-900"
          >
            <div>
              <h2 class="text-2xl font-semibold text-purple-100 mb-4 text-center">{{ story.title }}</h2>
              <p class="text-gray-400 text-center mb-6">{{ story.description }}</p>
            </div>

            <router-link
              :to="`/chapter/${story.first_chapter_id}`"
              class="text-gray-200 font-bold py-3 px-4 rounded-lg text-center mt-auto transition duration-300 hover:bg-indigo-800 shadow-lg"
              style="background-color: #6d4ca1;"
            >
              Découvrir cette histoire
            </router-link>
          </div>
        </div>

        <div v-else-if="!loading" class="text-center bg-gray-800 shadow-2xl rounded-2xl p-8 mt-10 border border-gray-700">
          <p class="text-xl text-gray-300">Aucune histoire disponible.</p>
        </div>
      </div>

      <div class="mt-16 text-center text-gray-500 text-sm">
        <p>Toutes ces histoires cachent des secrets... Saurez-vous les découvrir ?</p>
      </div>
    </div>
  </div>
</template>