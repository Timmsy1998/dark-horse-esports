<template>
    <div id="app">
        <div v-if="route.path === '/maintenance'">
            <router-view></router-view>
        </div>
        <div v-else class="text-light bg-dark">
            <navigation-bar class="navigation-bar"></navigation-bar>
            <content-area class="content-area"></content-area>
            <footer-bar class="footer-bar"></footer-bar>
        </div>
    </div>
</template>

<script setup>
import { useRoute } from 'vue-router'
import NavigationBar from './Components/Partials/NavigationBar.vue'
import ContentArea from './Components/Partials/ContentArea.vue'
import FooterBar from './Components/Partials/FooterBar.vue'

const route = useRoute()
</script>

<style>
#app {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}
.navigation-bar {
  height: 20vh; /* 25% of the viewport height */
}
.content-area {
  height: 60vh; /* 50% of the viewport height */
}
.footer-bar {
  height: 20vh; /* 25% of the viewport height */
}

.pt-6 {
  padding-top: 4rem;
}

.pt-7 {
  padding-top: 5rem;
}

.pt-8 {
  padding-top: 6rem;
}
</style>