<script setup>
import { Head } from '@inertiajs/inertia-vue3'
import bg from '../../images/2395249.webp'

defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
  laravelVersion: String,
  phpVersion: String,
})
</script>

<template>
  <Head title="Hochzeit" />

  <div class="absolute w-screen h-screen flex justify-center items-center flex-col">
    <div class="flex gap-3 text-3xl sm:text-5xl font-bold text-slate-800">
      <div class="-translate-y-5">
        Shannon
      </div>
      <div>&</div>
      <div class="translate-y-5">
        David
      </div>
    </div>
    <div class="mt-6 sm:mt-12 text-xl sm:text-3xl text-slate-500">
      ♥ Comming soon ♥
    </div>
  </div>
  <img
    class="w-screen h-screen object-cover"
    :src="bg"
    alt=""
  >
</template>

