import { createApp } from 'vue';

const app = createApp({});


import index from '../components/notifications/index.vue';
import error from '../components/error/error.vue'
app.component('error', error);
app.component('notifications', index);

app.mount('#notifications');
