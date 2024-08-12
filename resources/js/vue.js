import { createApp } from 'vue';
import Home from './Components/Home.vue';

const app = createApp({});

app.component('home-component', Home);
app.mount("#app");