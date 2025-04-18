<template>

    <preLoader v-if="$store.state.preLoader"></preLoader>
     
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <page-header></page-header>
        <!-- [ page-header ] end -->

        <!-- [ Main Content ] start -->
        <div class="main-content">
            <div class="row">

                <div class="col-12">
                    <div class="card stretch stretch-full">
                        <div class="card-body">

                            <router-view>
                            </router-view>

                        </div>
                    </div>
                </div>

                <!-- [Visitors Overview] start -->

            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>

</template>

<script>
export default {
    data() {
        return {

        }
    },
    methods: {

    },
    mounted() {

    }
}
</script>

<style>
.activeCustom{
    background-color: rgb(53, 46, 46);
    color:white;
}

</style>