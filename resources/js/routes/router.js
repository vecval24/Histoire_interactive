import { createRouter, createWebHistory } from 'vue-router';
import WelcomePage from '../pages/WelcomePage.vue';
import PageExample from '../pages/PageExample.vue'; 


const routes = [
  {
    path: '/',
    name: 'Welcome',
    component: WelcomePage,
  },
  {
    path: '/chapter/:id',
    name: 'Chapter',
    component: PageExample,
  },
];

export const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
});

