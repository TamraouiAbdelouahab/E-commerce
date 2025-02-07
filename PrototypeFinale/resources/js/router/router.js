import { createRouter, createWebHistory } from 'vue-router';


// Importer les composants Vue
import Dashboard from '../Components/App.vue';

const routes = [
    {
        path: '/dashbord',
        name: 'dashboard',
        component: Dashboard
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
