import { createApp } from 'vue';

const app = createApp({});

import router from './router.js';
import store from './store.js';
import index from '../components/users/index.vue';
import pageHeader from '../components/users/pageHeader.vue';
app.component('index', index);
app.component('page-header', pageHeader);

app.use(router);
app.use(store);


app.mount('#app');
