import { createRouter, createWebHistory } from "vue-router";
import Home from "../Components/Home.vue";

const routes = [
    {
        path: "/",
        name: "Home",
        component: Home,
        meta: {
            title: "Home Page",
        },
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach((to, from, next) => {
    // This sets the page title from the route meta field
    document.title = to.meta.title || "Default Page Title";
    next();
});

export default router;
