<template>
  <section class="relative py-28 md:py-36 bg-gradient-to-br from-white to-blue-50 border-b overflow-hidden">
    <div class="absolute top-16 left-12 w-48 h-48 border-2 border-blue-300 rounded-full opacity-50 z-0"></div>
    <div class="absolute bottom-24 right-16 w-64 h-64 border-2 border-dashed border-blue-200 rotate-6 opacity-40 z-0"></div>
    <svg class="absolute top-[45%] left-1/2 -translate-x-1/2 -translate-y-1/2 z-0 opacity-10" width="300" height="300" viewBox="0 0 300 300" fill="none">
      <circle cx="150" cy="150" r="120" stroke="#2563EB" stroke-width="2" />
      <line x1="150" y1="30" x2="150" y2="270" stroke="#2563EB" stroke-width="1" stroke-dasharray="4 4" />
      <line x1="30" y1="150" x2="270" y2="150" stroke="#2563EB" stroke-width="1" stroke-dasharray="4 4" />
    </svg>

    <div class="relative z-10 container mx-auto max-w-7xl px-4 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
      <div class="text-center md:text-left">
        <h1 class="text-5xl sm:text-6xl font-extrabold tracking-tight text-gray-900 mb-8">
          Знаходь та <span class="text-blue-600">публікуй</span> оголошення
        </h1>
        <p class="text-xl text-gray-600 max-w-xl mb-12">
          Усе — від авто до житла. У зручному маркетплейсі з сучасним дизайном.
        </p>
        <div class="flex flex-col sm:flex-row sm:justify-start justify-center gap-5">
          <RouterLink
            to="/ads"
            class="inline-flex items-center bg-blue-600 rounded-full px-8 py-4 text-base font-semibold text-white shadow-lg hover:bg-blue-700 transition"
          >
            Переглянути оголошення
          </RouterLink>

          <RouterLink
            to="/register"
            class="inline-flex items-center rounded-full border border-gray-300 bg-white px-8 py-4 text-base font-semibold text-gray-800 hover:bg-gray-100 transition"
          >
            Створити оголошення
          </RouterLink>
        </div>
      </div>

      <div class="flex justify-center">
        <img
          src="https://illustrations.popsy.co/gray/work-from-home.svg"
          alt="Ілюстрація оголошень"
          class="max-w-full h-auto md:max-w-md drop-shadow-lg"
          loading="lazy"
        />
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
import { RouterLink } from 'vue-router'
</script>
