import { createRouter, createWebHistory } from 'vue-router';
import { ref, computed } from 'vue'; 
import PageChapter from '../pages/PageChapter.vue'; 
import PageStories from '../pages/PageStories.vue';


const routes = [
  {
    path: '/story',
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
    redirect: '/stories',
  }
];

export const defaultAnchor = "stories";
export const curAnchor = ref(defaultAnchor);
export const currentPage = computed(() => {
    return (
        routes.find((route) => route.anchor === curAnchor.value)?.page ||
        PageStories
    );
});

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
});

export default router;
