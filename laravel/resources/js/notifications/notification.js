import { createApp } from 'vue';

const app = createApp({});


import index from '../components/notification/index.vue';

import error from '../components/error/error.vue'
app.component('error', error);
app.component('notification', index);



app.mount('#notification');
