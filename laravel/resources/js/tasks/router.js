import { createRouter, createWebHistory } from "vue-router";


import IndexTasks from "../components/tasks/indexTasks.vue";

import taskEdit from "../components/tasks/taskEdit.vue";

import createTask from "../components/tasks/createTask.vue";

export default createRouter({
    history: createWebHistory(),
    routes:[
        { path:'/tasks',component: IndexTasks, name:'allTasks' },
        { path:'/tasks/:id',component: taskEdit, name:'taskEdit' },
        { path:'/tasks/create',component: createTask, name:'createTask' },

        
    ]
})
