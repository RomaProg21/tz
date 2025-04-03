import { createApp } from 'vue';

const app = createApp({});


import index from '../components/notification/index.vue';

app.component('notification', index);



app.mount('#notification');
