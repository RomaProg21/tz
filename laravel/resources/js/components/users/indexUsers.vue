<template>

    <div v-if="$store.state.error == null">
        <div class="hstack justify-content-between mb-4 pb-">
            <div>
                <h5 class="mb-1">Все пользователи</h5>
                <span class="fs-12 text-muted">Список всех пользователей</span>
            </div>
            <!-- <a class="btn btn-light-brand">View Alls</a> -->
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Имя</th>
                        <th scope="col">email</th>
                        <th class="text-center" scope="col">Изменение</th>

                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(user, idx) in users" :key="user.id">
                        <th scope="row">{{ idx + 1 }}</th>
                        <td>{{ user.name }}</td>
                        <td>{{ user.email }}</td>
                        <td>
                        <td class="d-flex justify-content-center">
                            <button type="button" @click.stop="editUser(user.id)" class="btn btn-outline-primary btn-sm"
                                style="border-bottom: 1px solid;">Редактирование</button>
                        </td>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div v-else>
        <error :error="$store.state.error"></error>
    </div>

</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            users: [],
        }
    },
    methods: {
        async getUsers() {
            try {
                this.$store.commit('changePreLoader', true)
                const response = await axios.get('/api/getUsers')
                this.$store.commit('changePreLoader', false)

                this.users = response.data.users
            } catch (e) {
                this.$store.commit('changePreLoader', false)
                if (e.response.data.error) {
                    this.$store.commit('changeEror', e.response.data.error)
                }
                throw e
            }
        },
        editUser(id) {
            this.$router.push({ name: 'editUser', params: { id: id } })
        }
    },
    mounted() {
        if (this.$store.state.error != null) {
            this.$store.commit('changeEror', null)
        }
        this.getUsers()
    }

}
</script>

<style></style>