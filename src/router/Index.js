import { createRouter, createWebHistory } from 'vue-router';
import Home from '../views/Home.vue';
import BookingPage from '../views/BookingPage.vue';
import About from '../views/About.vue';

const routes = [
    { path: '/', component: Home },
    { path: '/booking', component: BookingPage },
    { path: '/about', component: About },
    
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;