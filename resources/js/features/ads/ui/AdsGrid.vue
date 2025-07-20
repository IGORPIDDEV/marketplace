<template>
  <section class="container mx-auto max-w-7xl px-4">
    <h2 class="text-2xl font-semibold text-gray-900 mb-6">Останні оголошення</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
      <AdCard
        v-for="ad in ads"
        :key="ad.id"
        :ad="ad"
      />
    </div>
  </section>
</template>

<script setup lang="ts">
import AdCard from '@/features/ads/ui/AdCard.vue'
import { fetchAds } from '@/features/ads/api'
import { onMounted, ref } from 'vue'

interface Ad {
  id: number
  title: string
  description: string
  price: number
  image?: string
}

const ads = ref<Ad[]>([])

onMounted(async () => {
  ads.value = await fetchAds()
})
</script>
