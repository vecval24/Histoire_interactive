<script setup>
  import { ref } from 'vue';
  import TheHeader from '@/components/TheHeader.vue';
  import PageExample from '@/pages/PageExample.vue';
  const n = ref(1);
</script>

<template>
  <div v-if="currentChapter">
    <h2>{{ currentChapter.title }}</h2>
    <p>{{ currentChapter.content }}</p>

    <div v-if="currentChapter.choices.length > 0">
      <button v-for="choice in currentChapter.choices" :key="choice.id" @click="goToChapter(choice.next_chapter_id)">
        {{ choice.text }}
      </button>
    </div>

    <div v-else>
      <p>Fin de l'histoire.</p>
    </div>
  </div>
  <div v-else>
    <p>Chargement...</p>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  data() {
    return {
      currentChapter: null
    }
  },
  mounted() {
    this.loadChapter(1) // Charger le chapitre 1 au démarrage
  },
  methods: {
    loadChapter(id) {
      axios.get(`/api/chapters/${id}`)
        .then(response => {
          this.currentChapter = response.data
        })
    },
    goToChapter(id) {
      this.loadChapter(id)
    }
  }
}
</script>

<style scoped>

</style>