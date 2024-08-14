import { createRouter, createWebHistory } from "vue-router";
import Home from "../Components/Home.vue";
import Maintenance from "../Components/Maintenance.vue";
import store from "../store";

const routes = [
    {
        path: "/",
        redirect: "/home"
    },
    {
        path: "/home",
        name: "Home",
        component: Home,
        meta: {
            title: "Home Page",
        },
    },
    {
        path: "/maintenance",
        name: "Maintenance",
        component: Maintenance,
        meta: {
            title: "Be back Soon!",
        },
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach((to, from, next) => {
    const maintenanceMode = import.meta.env.VITE_MAINTENANCE_MODE === "true";
    const betaCodeIsValid =
        store.state.betaCode === import.meta.env.VITE_BETA_CODE;

    if (maintenanceMode && !betaCodeIsValid && to.path !== "/maintenance") {
        next("/maintenance");
    } else {
        next();
    }

    document.title = to.meta.title || "Default Page Title";
    next();
});

export default router;
