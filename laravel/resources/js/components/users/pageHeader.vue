<template>

<div class="page-header">

<div class="page-header-right ms-auto">
    <div class="page-header-right-items">
        <div class="d-flex d-md-none">
            <a href="javascript:void(0)" class="page-header-right-close-toggle">
                <i class="feather-arrow-left me-2"></i>
                <span>Назад</span>
            </a>
        </div>
        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
            <!-- <div id="reportrange" class="reportrange-picker d-flex align-items-center">
                <span class="reportrange-picker-field"></span>
            </div> -->
            <router-link class="btn btn-outline-dark " :class="{ 'activeCustom': $route.name == 'allUsers' }" :to="{ name: 'allUsers' }">Все пользователи</router-link>

            <router-link class="btn btn-outline-dark " :class="{ 'activeCustom': $route.name == 'createUser' }" :to="{ name: 'createUser' }">Создать пользователя</router-link>



        </div>
    </div>
    <div class="d-md-none d-flex align-items-center">
        <a href="javascript:void(0)" class="page-header-right-open-toggle">
            <i class="feather-align-right fs-20"></i>
        </a>
    </div>
</div>
</div>

</template>
<script>
export default{
    data(){
        return{

        }
    },
    methods:{

    },
    mounted(){

    }
}
</script>