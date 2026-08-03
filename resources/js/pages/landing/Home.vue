<script>
import { ref } from 'vue';
const count = ref(0);
function increment() {
  count.value++;
}
</script>

<template>
  <div class="flex flex-col items-center justify-center min-h-screen py-2">
    <h1 class="text-6xl font-bold">Welcome to Vue 3!</h1>
    <p class="mt-3 text-2xl">Count: {{ count }}</p>
    <button
      @click="increment"
      class="mt-5 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600"
    >
      Increment
    </button>
  </div>
</template>