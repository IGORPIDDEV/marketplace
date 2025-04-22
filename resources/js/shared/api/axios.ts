import axios from 'axios'
// import { useAuthStore } from '@/features/auth/model/store'

export const api = axios.create({
  baseURL: '/api',
  withCredentials: true,
})

// api.interceptors.request.use((config) => {
//   const auth = useAuthStore()
//   if (auth.token) {
//     config.headers.Authorization = `Bearer ${auth.token}`
//   }
//   return config
// })

api.interceptors.response.use(
  (response) => response,
  (error) => {
    if (error.response?.status === 401) {
    }
    return Promise.reject(error)
  }
)
