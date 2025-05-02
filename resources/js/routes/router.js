import { createRouter, createWebHistory } from 'vue-router';
import WelcomePage from '../pages/PageStories.vue';
import PageExample from '../pages/PageChapters.vue'; 
import PageStories from '../pages/PageStories.vue';


const routes = [
  {
    path: 'story',
    name: 'Chapter',
    component: PageChapters,
  },
  {
    path: 'stories',
    name: 'Stories',
    component: PageStories,
  },
  
];

export const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
});

