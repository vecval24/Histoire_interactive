<script setup>
import { RouterView } from 'vue-router';
import { currentPage } from "@/stores/routes.js";
import TheNav from "./components/TheNav.vue";
</script>

<template>
    <div>
        <TheNav />
        <main>
            <component :is="currentPage" />
        </main>
    </div>
</template>

<style scoped>

</style>

<!-- <script setup>
  import { RouterView } from 'vue-router';
</script>

<template>
  <RouterView></RouterView>
</template> -->

