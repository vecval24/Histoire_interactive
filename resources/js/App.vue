<script setup>
import { RouterView } from 'vue-router';
// Supprimer cette ligne qui importe currentPage
// import { currentPage } from "./routes/router.js";
</script>

<template>
    <div>
        <main>
            <RouterView />
        </main>
    </div>
</template>

<style scoped>
</style>