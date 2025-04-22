import { createApp } from 'vue'
import App from './App.vue'
import { router } from './app/router'
import { createPinia } from 'pinia'
import '@/css/app.css'

const app = createApp(App)

app.use(router)
app.use(createPinia())

app.mount('#app')
