<template>


    <div class="hstack justify-content-between mb-4 pb-">
        <div>
            <h5 class="mb-1">Все задачи</h5>
            <span class="fs-12 text-muted">Список всех задач</span>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="card border-dark mb-3" style="max-width: 30rem;" v-for="(task,idx) in tasks" :key="idx">
            <div class="card-header">{{task.area}}</div>
            <div class="card-body text-dark">
                <h5 class="card-title">Dark card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.</p>
            </div>
        </div>
    </div>


</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            tasks:[],
        }
    },
    methods: {
        async getAllTasks(){
            try {
                const response = await axios.get('/api/getAllTasks')
                this.tasks = response.data.tasks
                console.log(this.tasks)
            } catch (e){
                throw e
            }        
        }
    },
    mounted() {
        this.getAllTasks()
    }

}
</script>

<style></style>