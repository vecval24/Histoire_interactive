<script setup>
import { fetchJson } from "@/utils/fetchJson";
import { onMounted, onUnmounted, ref, watch } from "vue";
import { useFetchJson } from "../composables/useFetchJson";
import { useRoute } from 'vue-router';

const route = useRoute();
const initialChapterId = parseInt(route.params.id);

let interval;
const time = ref(getTimer());
// const currentChapterId = ref(getChapter());
const currentChapterId = ref(initialChapterId);

// const { data, error, loading } = useFetchJson(
//     `stories/1/chapters/${currentChapterId.value}`
// );
const { data, error, loading } = useFetchJson({
  url: `/api/v1/chapters/${currentChapterId.value}`
});


watch(currentChapterId, () => {
    const { request } = fetchJson(
        `stories/1/chapters/${currentChapterId.value}`
    );
    request.then((res) => {
        data.value = res;
    });
});

onMounted(() => {
    interval = setInterval(() => {
        // On incrémente le compteur si on est pas dans un chapitre de fin.
        if (data.value.choices.length != 0) {
            time.value++;
        }

        localStorage.setItem("story-1-timer", time.value);
    }, 1000);
});

onUnmounted(() => {
    clearInterval(interval);
});

function getChapter() {
    const chapterId = localStorage.getItem(`story-1-current-chapter`);

    if (chapterId) {
        return parseInt(chapterId);
    }

    return 1;
}

function getTimer() {
    const timer = localStorage.getItem("story-1-timer");
    if (timer) {
        return parseInt(timer);
    }
    return 0;
}

function onChoiceClick(choice) {
    localStorage.setItem(`story-1-current-chapter`, choice.next_chapter_id);

    currentChapterId.value = choice.next_chapter_id;
}

function formatTime(time) {
    const hours = Math.floor(time / 3600);
    const minutes = Math.floor((time % 3600) / 60);
    const seconds = time % 60;
    return `${hours.toString().padStart(2, "0")}:${minutes
        .toString()
        .padStart(2, "0")}:${seconds.toString().padStart(2, "0")}`;
}

function onRestartClick() {
    localStorage.setItem(`story-1-current-chapter`, 1);
    currentChapterId.value = 1;
    time.value = 0;
}

function goToNextChapter(chapterId) {
  currentChapterId.value = chapterId;
  localStorage.setItem("story-1-current-chapter", chapterId);
}
</script>

<template>
  <div v-if="!loading" class="page">
    <!-- Header avec titre + timer -->
    <div class="header">
      <h1 class="title">{{data.title }}</h1>
      <div class="timer">{{ formatTime(time) }}</div>
    </div>

    <div class="spacer"></div>

    <!-- Zone de texte + choix -->
    <div class="menu">
      <p class="text">
        {{ data.content }}
      </p>

      <ol class="choices">
        <li v-for="(choice, i) in choices" :key="choice.id">
          <button class="choice" @click="goToNextChapter(choice.next_chapter_id)">
            {{ i + 1 }}. {{ choice.choice_text }}
          </button>
        </li>

        <li v-if="choices.length === 0">
          <button class="choice" @click="onRestartClick">
            Recommencer
          </button>
        </li>
        <li v-if="choices.length === 0">
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
