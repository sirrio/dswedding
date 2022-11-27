<script setup>
import { ref } from 'vue'
import FullPage from '@/Pages/FullPage'
import { intervalToDuration } from 'date-fns'
import TimerComponent from '@/Pages/TimerComponent'
import PolaroidCard from '@/Pages/PolaroidCard'

defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
})

const weedingDate = new Date(2023, 7, 3, 14,)
const delta = ref(intervalToDuration({
  start: new Date(),
  end: weedingDate
}))

setInterval(() => {
  delta.value = intervalToDuration({
    start: new Date(),
    end: weedingDate
  })
}, 1000)
</script>

<template>
  <div class="overflow-scroll h-screen snap-y snap-mandatory">
    <img
      class="-z-10 fixed object-cover w-full h-full saturate-50"
      src="/images/2395249.jpg"
      alt=""
    >
    <!--    <div class="z-50 fixed right-4 top-0 bottom-0 flex flex-col justify-center gap-3">-->
    <!--      <div class="w-5 h-5 border-4 rounded-full border-slate-800 bg-slate-800 ">-->
    <!--        a-->
    <!--      </div>-->
    <!--      <div class="w-5 h-5 border-4 rounded-full border-slate-800">-->
    <!--        a-->
    <!--      </div>-->
    <!--      <div class="w-5 h-5 border-4 rounded-full border-slate-800">-->
    <!--        a-->
    <!--      </div>-->
    <!--      <div class="w-5 h-5 border-4 rounded-full border-slate-800">-->
    <!--        a-->
    <!--      </div>-->
    <!--      <div class="w-5 h-5 border-4 rounded-full border-slate-800">-->
    <!--        a-->
    <!--      </div>-->
    <!--    </div>-->
    <!--Hero-->
    <full-page
      id="hero"
      class="snap-center relative"
    >
      <h1 class="z-10">
        Shannon & David
      </h1>
      <img
        class="hidden"
        src="/images/8B995269-09BE-4A3C-A03C-C2C69A8D92B1.JPG"
        alt=""
      >
      <polaroid-card
        class="absolute rotate-[32deg] top-[31%] right-[5%]"
        img-path="/images/d9e22d46-7536-486f-82dd-d3e1281d4c98.jpg"
      />
      <polaroid-card
        class="absolute rotate-[16deg] top-[53%] right-[15%]"
        img-path="/images/cb712c88-fb57-423c-9779-014fdf8af9d4.JPG"
      />
      <polaroid-card
        class="absolute rotate-[-25deg] top-[27%] left-[5%]"
        img-path="/images/b574690a-7a30-45c2-8db1-4ad229cc2087.JPG"
      />
      <polaroid-card
        class="absolute rotate-[-9deg] top-[7%] left-[15%]"
        img-path="/images/8B995269-09BE-4A3C-A03C-C2C69A8D92B1.JPG"
      />
    </full-page>
    <!--Countdown-->
    <full-page
      id="countdown"
      class="snap-center"
    >
      <div>
        <h2>Nur noch</h2>
      </div>
      <div class="flex gap-3">
        <timer-component
          name="Monate"
          :data="delta.months"
        />
        <timer-component
          class="mx-6"
          name="Tage"
          :data="delta.days"
        />
        <timer-component
          name="Stunden"
          :data="delta.hours"
        />
        <timer-component
          name="Minuten"
          :data="delta.minutes"
        />
        <timer-component
          name="Stunden"
          :data="delta.seconds"
        />
      </div>
      <div>
        <h2>bis zur Trauung</h2>
      </div>
    </full-page>
    <!--Accept-->
    <full-page
      id="accept"
      class="snap-center"
    >
      <h2>Seid ihr dabei? Hier könnt ihr Zu- oder Absagen</h2>
      <div class="form-control w-1/2 flex flex-col gap-3">
        <label class="label">
          <span class="label-text font-bold text-3xl">E-Mail</span>
          <input
            class="input input-bordered font-mono w-1/2"
            type="text"
            placeholder="E-Mail"
          >
        </label>
        <label class="label">
          <span class="label-text font-bold text-3xl">Wir heißen</span>
          <input
            class="input input-bordered font-mono w-1/2"
            type="text"
            placeholder="Name"
          >
        </label>
        <label class="label">
          <span class="label-text font-bold text-3xl">Wir sind dabei</span>
          <input
            class="toggle toggle-lg"
            type="checkbox"
            checked
          >
        </label>
        <button class="btn font-mono">
          Speichern
        </button>
      </div>
    </full-page>
    <!--Drive-->
    <full-page
      id="drive"
      class="snap-center"
    >
      <div>
        <h2>So kommt ihr hin</h2>
      </div>
      <iframe
        class="w-3/4 h-1/2 bg-white border shadow-md pb-12 pt-5 px-5"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2590.7288503021073!2d6.905444834460768!3d49.508514296642296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4795985cfac32eeb%3A0x1ab621aa45d4146a!2sD%C3%B6sterhof%201%2C%2066687%20Wadern!5e0!3m2!1sde!2sde!4v1669416494891!5m2!1sde!2sde"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      />
      <div>
        <h2>Wir heiraten auf dem Dösterhof</h2>
      </div>
    </full-page>
  </div>
</template>
