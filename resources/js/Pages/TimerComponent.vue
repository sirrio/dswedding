<script setup>
defineProps({
  name: { type: String, default: '' },
  data: { type: Number, default: 0 }
})
</script>

<template>
  <div class="font-mono">
    <div class="text-7xl font-bold bg-white shadow-md rounded-lg p-6 countdown">
      <span :style="'--value:'+data" />
    </div>
    <div class="text-3x font-bold p-6 py-3">
      {{ name }}
    </div>
  </div>
</template>
