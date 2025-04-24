<template>
  <header class="sticky top-0 z-50 bg-white shadow-sm border-b">
    <div class="container mx-auto max-w-7xl px-6 sm:px-8 lg:px-10 h-24 flex items-center justify-between">
      <div class="flex items-center gap-3">
        <div class="w-10 h-10 bg-gradient-to-tr from-indigo-500 via-blue-400 to-purple-500 rounded-full"></div>
        <RouterLink to="/" class="text-2xl font-extrabold text-gray-900 tracking-tight">Marketplace</RouterLink>
      </div>

      <nav class="hidden md:flex items-center space-x-10 text-base font-medium text-gray-700">
        <RouterLink to="/" class="hover:text-blue-600 transition">Головна</RouterLink>
        <RouterLink to="/ads" class="hover:text-blue-600 transition">Оголошення</RouterLink>
        <RouterLink to="/favorites" class="hover:text-blue-600 transition">Обране</RouterLink>
        <RouterLink to="/profile" class="hover:text-blue-600 transition">Профіль</RouterLink>
      </nav>

      <div class="hidden md:flex">
        <RouterLink
          to="/register"
          class="inline-flex items-center rounded-full bg-blue-600 px-7 py-3 text-base font-semibold text-white shadow hover:bg-indigo-700 transition"
        >
          Реєстрація
        </RouterLink>
      </div>
    </div>
  </header>
</template>

<script setup lang="ts">
import { RouterLink } from 'vue-router'
</script>
