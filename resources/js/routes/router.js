import { createRouter, createWebHistory } from 'vue-router';

import PageChapter from '../pages/PageChapter.vue';
import PageStories from '../pages/PageStories.vue';

const routes = [
  {
    path: '/chapter/:id',
    name: 'Chapter',
    component: PageChapter,
  },
  {
    path: '/stories',
    name: 'Stories',
    component: PageStories,
  },
  {
    path: '/',
    redirect: '/stories'  // Redirection vers /stories pour la route racine
  }
];

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
});

export default router;