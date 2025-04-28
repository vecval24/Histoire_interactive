<script setup>
import { useFetchJson } from '@/composables/useFetchJson';


const { data, error, isLoading } = useFetchJson('welcome');
const { data: data2, error: error2} = useFetchJson({url: 'welcome', method: 'DELETE' });
</script>

<template>
  <div>
    <h1>Page Example</h1>
    <p>{{ data }}</p>
    <p>{{ data2 }}</p>
    <p>{{ error2 }}</p>
  </div>
</template>

<style scoped>

</style>