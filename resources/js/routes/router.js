import { createRouter, createWebHistory } from 'vue-router';

import PageChapter from '../pages/PageChapter.vue';
import PageStories from '../pages/PageStories.vue';
import NotFound from '../pages/NotFound.vue';


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
  },
  {
    path: '/:pathMatch(.*)*',
    name: 'NotFound',
    component: NotFound // Affiche une vraie page 404 Vue
    // ou tu peux faire : redirect: '/' si tu veux juste rediriger vers la home
  }
];

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
});

export default router;