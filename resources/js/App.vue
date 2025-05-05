<script setup>
import { RouterView } from 'vue-router';
import { currentPage } from "./routes/router.js";

</script>

<template>
    <div>
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

