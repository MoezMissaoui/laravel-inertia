<template>
  <div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold underline mb-5">
      {{ message }}
    </h1>
  </div>
</template>

<script setup>
defineProps({
  message: {
    type: String,
    required: true,
  },
})
</script>