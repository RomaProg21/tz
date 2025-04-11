<template>

    <div>
        <div>
            <div class="form-group mb-3">
                <p>Имя:</p>
                <input type="text" class="form-control" name="name" v-model="name">
            </div>
            <div class="form-group mb-3">
                <p>Email:</p>
                <input type="email" class="form-control" name="email" v-model="email">
            </div>
            <div class="form-group mb-3">
                <p>Пароль:</p>
                <input type="text" class="form-control" name="password" v-model="password">
            </div>


            <div class="d-flex justify-content-center">
                <button class="btn btn-primary mt-3" @click="createUser" :disabled="checkedDisableCreateButton"
                    type="submit">Создать</button>
            </div>
        </div>

    </div>

</template>


<script>
import axios from 'axios'
export default {
    data() {
        return {
            name: '',
            email: '',
            password: '',

        }
    },
    computed: {
        checkedDisableCreateButton() {
            return this.name == '' ||
            this.email.length < 4 ||
            this.password.length < 3
        }
    },
    methods: {
        async createUser() {
            try {
                this.$store.commit('changePreLoader',true)
                const response = await axios.post('/api/createUser', {
                    name: this.name,
                    email: this.email,
                    password: this.password
                })
                this.$store.commit('changePreLoader',false)

                this.$router.push({ name: 'allUsers'})

            } catch (e) {
                this.$store.commit('changePreLoader',false)
                if(e.response.data.errors.email){
                    alert(e.response.data.errors.email)
                } else {
                    throw e
                }
            }
        }
    },
    mounted() {
    }
}
</script>