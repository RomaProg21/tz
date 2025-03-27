<template>
    <div>
        <div class="form-group mb-3">
            <p>Область задачи:</p>
            <select name="" id="" class="form-control" v-model="area"> 
                <option value="личная">Личная</option>
                <option value="служебная">Служебная</option>
                <option value="компания">Компания</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <p>Исполнитель задачи:</p>
            <select name="" id="" class="form-control" v-model="executor">
                <option v-for="(user, idx) in users" :key="idx" :value="user.id">{{ user.name }} ({{ user.email }})
                </option>
            </select>
        </div>

        <div class="form-group mb-3">
            <p>Описание:</p>
            <textarea class="form-control" name="description" v-model="description"></textarea>
        </div>
        <div class="form-group mb-3">
            <p>Название:</p>
            <input class="form-control" name="name" v-model="name">
        </div>

        <div class="d-flex justify-content-center">
            <button @click="createTask" class="btn btn-primary mt-3" :disabled="checkForm" >Создать</button>
        </div>

    </div>


</template>

<script>
import axios from 'axios'


export default {
    data() {
        return {
            users: [],
            description: '',
            executor:'',
            area:'',
            name:'',
        }
    },
    methods: {
        async getUsers() {
            try {
                const response = await axios.get('/api/getUsers')
                this.users = response.data.users
            } catch (e) {
                throw e
            }
        },
        async createTask(){
            try{
                const response = await axios.post('/api/createTask',{
                    name: this.name,
                    area: this.area,
                    description: this.description,
                    executor: this.executor,
                    creator: window.Laravel.userId
                })

                this.$router.push({ name: 'allTasks' })


            } catch(e){
                throw e
            }
        }
    },
    computed:{
        checkForm(){
            return this.area == '' ||
            this.description == '' ||
            this.executor == '' || 
            this.name == ''
        }
    },
    mounted() {
        this.getUsers()
    }
}
</script>