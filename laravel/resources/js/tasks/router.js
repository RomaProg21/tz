import { createRouter, createWebHistory } from "vue-router";


import IndexTasks from "../components/tasks/indexTasks.vue";


export default createRouter({
    history: createWebHistory(),
    routes:[
        { path:'/tasks',component: IndexTasks, name:'allTasks' },

        
    ]
})
