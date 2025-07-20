import { api } from '@/shared/api/axios'

export async function fetchAds() {
  const response = await api.get('/ads')
  return response.data.data
}
