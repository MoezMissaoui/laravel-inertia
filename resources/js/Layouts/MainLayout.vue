<template>
  <div class="flex mb-5">
    <Link href="/" class="m-2"> Index Page </Link>
    <br />
    <Link href="/show" class="m-2"> Show Page </Link>

    <div class="ml-20 mt-2">Timer: {{ timer }}</div>
  </div>

  <slot />
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'

const timer = ref(0)
// setInterval(() => timer.value++, 1000);
</script>
