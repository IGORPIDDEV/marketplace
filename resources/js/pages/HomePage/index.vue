<template>
  <div class="p-6 max-w-7xl mx-auto">
    <h1 class="text-3xl font-bold mb-6">Оголошення</h1>

    <div
      v-if="loading"
      class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4"
    >
      <div
        v-for="n in 8"
        :key="n"
        class="h-48 bg-gray-100 rounded-xl animate-pulse"
      />
    </div>

    <div
      v-else
      class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4"
    >
      <AdCard v-for="ad in ads" :key="ad.id" :ad="ad" />
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref, onMounted } from 'vue'
import { fetchAds } from '@/features/ads/api'
import AdCard from '@/features/ads/ui/AdCard.vue'

interface Ad {
  id: number
  title: string
  description: string
  price: number
  image?: string
}

const ads = ref<Ad[]>([])
const loading = ref(true)

onMounted(async () => {
  loading.value = true
  ads.value = await fetchAds()
  loading.value = false
})
</script>

<style scoped>
</style>
