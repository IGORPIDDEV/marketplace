<template>
  <router-link :to="`/ads/${ad.id}`" class="block">
    <div class="bg-white rounded-xl shadow hover:shadow-md transition overflow-hidden">
      <div class="aspect-w-4 aspect-h-3 bg-gray-100">
        <!-- <img :src="ad.image ?? 'https://via.placeholder.com/300x200'" alt="Ad Image" class="object-cover w-full h-full" /> -->
      </div>
      <div class="p-4">
        <h2 class="text-lg font-semibold line-clamp-1">{{ ad.title }}</h2>
        <p class="text-gray-500 text-sm line-clamp-2">{{ ad.description }}</p>
        <div class="mt-2 text-xl font-bold text-blue-600">{{ ad.price }} ₴</div>
      </div>
    </div>
  </router-link>
</template>

<script setup lang="ts">
interface Props {
  ad: {
    id: number
    title: string
    description: string
    price: number
    image?: string
  }
}

defineProps<Props>()
</script>
