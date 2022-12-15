<script setup>
defineProps({
  imgPath: { default: null, type: String }
})
</script>

<template>
  <div
    class="hidden xl:block bg-white w-[400px] h-[400px] border shadow-md pb-12 pt-5 px-5"
  >
    <img
      class="object-cover w-full h-full"
      :src="imgPath"
      alt=""
    >
  </div>
</template>
