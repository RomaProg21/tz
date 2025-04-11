<template>

    <div v-if="user != null">
        <div v-if="error == null">
            <div class="form-group mb-3">
                <p>Имя:</p>
                <input type="text" class="form-control" name="name" v-model="name">
            </div>
            <div class="form-group mb-3">
                <p>Email:</p>
                <input type="text" class="form-control" name="email" v-model="email">
            </div>
            <div class="form-group mb-3">
                <p>Пароль:</p>
                <input type="password" class="form-control" name="password" v-model="password">
            </div>


            <div class="d-flex justify-content-between">
                <button @click="editDataUser" class="btn btn-primary mt-3" :disabled="checkedDisableEditButton" type="submit">Изменить</button>
                <a @click="goBack" class="btn btn-danger mt-3">Назад</a>
            </div>
        </div>
        <div class="alert alert-danger text-center" v-else>
            {{ error }}
        </div>
    </div>

</template>


<script>
import axios from 'axios'
export default {
    data() {
        return {
            user: null,
            error: null,
            name: '',
            email: '',
            password: '',

        }
    },
    computed:{
        checkedDisableEditButton(){
            return this.name == this.user.name &&
            this.email == this.user.email &&
            this.password == this.user.password  
        }
    },
    methods: {
        goBack(){
            this.$router.push({ name: 'allUsers'})
        },
        async getInfoUser() {
            try {
                this.$store.commit('changePreLoader',true)
                const response = await axios.get('/api/getInfoUser', {
                    params: {
                        id: this.$route.params.id
                    }
                })
                this.$store.commit('changePreLoader',false)

                if (response.data.user != null) {
                    this.user = response.data.user;
                    this.name = response.data.user.name;
                    this.email = response.data.user.email;
                    this.password = response.data.user.password;

                } else {
                    this.error = 'Такого пользователя не существует'
                    this.user = false
                }

            } catch (e) {
                this.$store.commit('changePreLoader',false)
                throw e;
            }
        },
        async editDataUser(){
            try{
                this.$store.commit('changePreLoader',true)
                const response = await axios.post('/api/editDataUser',{
                    id: this.$route.params.id,
                    name: this.name,
                    email:this.email,
                    password: this.password
                })
                this.$store.commit('changePreLoader',false)

                if(response.data.user != null){
                    this.$router.push({ name: 'allUsers'})
                } else {
                    alert('Ошибка изменения')
                    this.$router.push({ name: 'allUsers'})
                }
            } catch(e){
                this.$store.commit('changePreLoader',false)
                throw e
            }
        },
    },
    mounted() {
        this.getInfoUser();
    }
}
</script>