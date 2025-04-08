import { createApp } from 'vue';

const app = createApp({});


import index from '../components/notifications/index.vue';

app.component('notifications', index);

app.mount('#notifications');