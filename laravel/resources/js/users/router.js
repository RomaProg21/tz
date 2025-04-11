import { createRouter, createWebHistory } from "vue-router";


import IndexUsers from '../components/users/indexUsers.vue';

import editUser from "../components/users/editUser.vue";

import createUser from "../components/users/createUser.vue";


export default createRouter({
    history: createWebHistory(),
    routes:[
        { path:'/users',component: IndexUsers, name:'allUsers' },
        { path:'/users/createUser',component: createUser, name:'createUser' },
        { path:'/users/:id',component: editUser, name:'editUser'},

        
    ]
})
