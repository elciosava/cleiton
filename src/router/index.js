import { createRouter, createWebHistory } from 'vue-router'
import ContatoView from '../views/contatoView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/', name: 'contato', component: ContatoView
    },
  ]
})

export default router
