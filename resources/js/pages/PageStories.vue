<script setup>
import { useFetchJson } from "@/composables/useFetchJson";

const { data, error, loading } = useFetchJson({
  url: "/stories"
});
</script>

<template>
  <div class="page">
  <h1 class="title">Liste des Histoires interactives</h1>

  <h2 class="subtitle">Trois histoires mystérieuses avec des fins différentes en fonction des choix pris.</h2>

  <p class="paragraph">Choisis une histoire...</p>

  <div class="stories">
  <div v-if="data && data.length > 0" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <div
      v-for="story in data"
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


