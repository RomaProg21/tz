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
                this.$store.commit('changePreLoader',true)
                const response = await axios.get('/api/getUsers')
                this.$store.commit('changePreLoader',false)

                this.users = response.data.users
            } catch (e) {
                this.$store.commit('changePreLoader',false)
                throw e
            }
        },
        async createTask(){
            try{
                this.$store.commit('changePreLoader',true)
                const response = await axios.post('/api/createTask',{
                    name: this.name,
                    area: this.area,
                    description: this.description,
                    executor: this.executor,
                    creator: window.Laravel.userId
                })
                this.$store.commit('changePreLoader',false)

                this.$router.push({ name: 'allTasks' })
            } catch(e){
                this.$store.commit('changePreLoader',false)
                if(e.response.data.message.includes('invalid mailbox')){
                    this.$router.push({ name: 'allTasks' })
                }
                throw e
            }  finally {
                if (window.app) {
                    const event = new CustomEvent('update-data-notifications');
                    window.dispatchEvent(event);
                }
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