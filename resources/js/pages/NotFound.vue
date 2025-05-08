<template>
    <div class="bg-gray-900 text-gray-200 min-h-screen flex flex-col items-center justify-center p-8">
      <div class="bg-gray-800 border border-red-800 p-10 rounded-2xl shadow-2xl text-center max-w-xl w-full">
        <h1 class="text-6xl font-bold text-red-400 mb-4">404</h1>
        <p class="text-xl text-gray-300 mb-6">Oups ! Cette page est introuvable.</p>
        <p class="text-md text-gray-400 mb-8">Il semble que cette route n’existe pas ou ait été supprimée.</p>
  
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <router-link
            to="/"
            class="bg-indigo-800 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg transition shadow-lg border border-indigo-900 text-center"
          >
            Retour à l'accueil
          </router-link>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { useRouter } from 'vue-router'
  const router = useRouter()
  
  function goBack() {
    router.back()
  }
  </script>
  
  <style scoped>
  /* Ajout optionnel d’une animation douce */
  .page-enter-active,
  .page-leave-active {
    transition: opacity 0.5s ease;
  }
  .page-enter-from,
  .page-leave-to {
    opacity: 0;
  }
  </style>
  