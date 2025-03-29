import { createApp } from 'vue';

const app = createApp({});

import router from './router.js';
import store from './store.js';
import index from '../components/tasks/index.vue';
import pageHeader from '../components/tasks/pageHeader.vue';
import preLoader from '../components/preLoader/preLoader.vue'
app.component('index', index);
app.component('page-header', pageHeader);
app.component('preLoader',preLoader)
app.use(router);
app.use(store);


app.mount('#app');
