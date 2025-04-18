<template>

    <div class="alert alert-danger text-center">
        <div>{{ error }}</div>
        <div class="d-flex justify-content-center mt-5"><button @click="reloadWindow" class="btn btn-outline-primary">Обновить страницу</button></div>
    </div>

</template>

<script>
export default {
    props:['error'],
    data() {
        return {

        }
    },
    methods: {
        reloadWindow(){
            location.reload()

        }
    },
    mounted() {

    }
}
</script>