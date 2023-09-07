<script setup>
defineProps(['files'])
</script>

<template>
  <div class="flex justify-center my-10">
    <h2>Gallery</h2>
  </div>

  <div class="flex flex-wrap gap-12 justify-center">
    <img
      v-for="(file, fileKey) in files"
      :key="fileKey"
      loading="lazy"
      :src="file"
      :alt="fileKey"
    >
  </div>
</template>
