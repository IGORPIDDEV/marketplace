<template>
  <div class="min-h-screen flex flex-col">
    <SiteNav />
    <main class="flex-1">
      <slot />
    </main>
    <SiteFooter />
  </div>
</template>

<script setup lang="ts">
import SiteNav from '@/shared/ui/SiteNav.vue'
// import SiteFooter from '@/shared/ui/SiteFooter.vue'
</script>
