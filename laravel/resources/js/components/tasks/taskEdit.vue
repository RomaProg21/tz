<template>
    <div v-if="$store.state.error == null">
        <div v-if="task != null">
            <div v-if="error == null">

                <h5 class="card-title mb-3">{{ task.name }}</h5>
                <h5 class="card-text mb-3">Исполнитель - {{ task.executor_id.name }}(почта:{{ task.executor_id.email }})
                </h5>
                <div class="card-text">
                    <p>Статус: <strong>{{ task.status }}</strong></p>
                </div>
                <p class="card-text">Дата создания:<strong>{{ task.created_at }}</strong></p>
                <p class="card-text">Дата изменения:<strong>{{ task.updated_at }}</strong></p>
                <p class="card-text">Область:<strong>{{ task.area }}</strong></p>
                <p class="card-text">Постановщик:<strong>{{ task.creator_id.name }}(почта:{{ task.creator_id.email
                        }})</strong></p>
                <p class="card-text" v-if="timeInWork != null">Время в работе:<strong>{{
                    timeInWork }}</strong></p>
                <div class="form-group mb-3">
                    <p>Описание:</p>
                    <textarea class="form-control" name="description" :disabled="checkedCreator"
                        v-model.trim="description"></textarea>
                </div>
                <div class="form-group mb-3">
                    <p>Исполнитель задачи:</p>
                    <select name="" id="" class="form-control" v-model="executorId" :disabled="checkedCreator">
                        <option v-for="(user, idx) in users" :key="idx" :value="user.id">{{ user.name }} ({{ user.email
                            }})
                        </option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <p>Статус задачи:</p>
                    <select name="" id="" class="form-control" :disabled="checkedExecutor" v-model="status">
                        <option value="новая">Новая</option>
                        <option value="принята">Принята</option>
                        <option value="в работе">В работе</option>
                        <option value="отложено">Отложено</option>
                        <option value="выполнено">Выполнено</option>
                        <option value="отменено">Отменено</option>
                    </select>
                </div>


                <div class="d-flex justify-content-between">
                    <button @click="updateDataTask" class="btn btn-primary mt-3" type="submit"
                        :disabled="checkChanged">Изменить</button>
                    <a @click="goBack" class="btn btn-danger mt-3">Назад</a>
                </div>
                <div>


                    <div class="card mt-5">
                        <div class="card-body">
                            <h5 class="card-title">Добавить комментарий</h5>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Текст комментария</label>
                                <textarea v-model="textComment" class="form-control" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success mt-3" @click="addComment"
                                    :disabled="textComment.length < 1">Добавить</button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-5 mb-5">
                        <h5>Комментарии ({{ comments.length }})</h5>
                    </div>
                    <div class="list-group">
                        <a v-for="(comment, idx) in comments" :key="idx" href="#"
                            class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between comment-header">
                                <h5 class="mb-1" style="word-break: break-word">{{ comment.user.email }}</h5>
                                <small>{{ comment.created_at }}</small>
                            </div>
                            <p class="mb-1">{{ comment.text }}</p>
                        </a>
                    </div>

                </div>
            </div>
            <div class="alert alert-danger text-center" v-else>
                {{ error }}
            </div>
        </div>
    </div>
    <div v-else>
        <error :error="$store.state.error"></error>
    </div>
</template>

<script>
const authUser = window.Laravel.userId
import axios from "axios"
export default {
    data() {
        return {
            task: null,
            error: null,
            description: '',
            oldDescription: '',
            status: '',
            statusOld: '',
            users: null,
            executorId: '',
            executorIdOld: '',
            creatorId: '',
            comments: [],
            textComment: '',
            timeInWork: null,
        }
    },
    methods: {
        goBack() {
            this.$router.push({ name: 'allTasks' })
        },
        async getDataTask() {
            try {
                this.$store.commit('changePreLoader', true)
                const response = await axios.get('/api/getDataTask', {
                    params: {
                        id: this.$route.params.id
                    }
                })
                this.$store.commit('changePreLoader', false)

                if (response.data.timeInWork != null) {
                    this.timeInWork = response.data.timeInWork
                }

                if (response.data.task != null) {
                    this.task = response.data.task
                    this.description = response.data.task.description
                    this.oldDescription = response.data.task.description
                    this.status = response.data.task.status
                    this.statusOld = response.data.task.status
                    this.executorId = response.data.task.executor_id.id
                    this.executorIdOld = response.data.task.executor_id.id
                    this.creatorId = response.data.task.creator_id.id
                } else {
                    this.error = 'Такой задачи не существует'
                    this.task = false

                }
            } catch (e) {
                this.$store.commit('changePreLoader', false)
                if (e.response.data.error) {
                    this.$store.commit('changeEror', e.response.data.error)
                }
                throw e
            }
        },
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
        async updateDataTask() {
            try {
                this.$store.commit('changePreLoader', true)
                const response = await axios.post('/api/updateDataTask', {
                    id: this.$route.params.id,
                    description: this.description,
                    status: this.status,
                    executorId: this.executorId
                })
                this.$store.commit('changePreLoader', false)
                if (response.data.message == 'Task edited') {
                    this.$router.push({ name: 'allTasks' })
                } else {
                    alert('Ошибка изменения')
                }
            } catch (e) {
                this.$store.commit('changePreLoader', false)
                if (e.response.data.error) {
                    this.$store.commit('changeEror', e.response.data.error)
                }
                if (e.response.data.message.includes('invalid mailbox')) {
                    this.$router.push({ name: 'allTasks' })

                }
                throw e
            } finally {
                if (window.app) {
                    const event = new CustomEvent('update-data-notifications');
                    window.dispatchEvent(event);
                }
            }
        },
        async getComments() {
            try {
                this.$store.commit('changePreLoader', true)
                const response = await axios.get('/api/getComments', {
                    params: {
                        id: this.$route.params.id
                    }
                })
                this.$store.commit('changePreLoader', false)
                this.comments = response.data.comments
            } catch (e) {
                this.$store.commit('changePreLoader', false)
                if (e.response.data.error) {
                    this.$store.commit('changeEror', e.response.data.error)
                }
                throw e
            }
        },
        async addComment() {
            try {
                this.$store.commit('changePreLoader', true)
                const response = await axios.post('/api/addComment', {
                    comment: this.textComment,
                    authUser: authUser,
                    taskid: this.$route.params.id
                })
                this.$store.commit('changePreLoader', false)
                this.textComment = ''
                this.getComments()

            } catch (e) {
                this.$store.commit('changePreLoader', false)
                if (e.response.data.error) {
                    this.$store.commit('changeEror', e.response.data.error)
                }
                if (e.response.data.message.includes('invalid mailbox')) {
                    this.textComment = ''
                    this.getComments()
                }
            } finally {
                if (window.app) {
                    const event = new CustomEvent('update-data-notifications');
                    window.dispatchEvent(event);
                }
            }
        }
    },
    computed: {

        checkedCreator() {
            return this.creatorId != authUser
        },
        checkedExecutor() {
            return this.executorId != authUser
        },
        checkChanged() {
            if (authUser == this.creatorId && authUser == this.executorId) {
                return this.oldDescription == this.description && this.executorId == this.executorIdOld && this.statusOld == this.status
            } else if (authUser == this.creatorId) {
                return this.oldDescription == this.description && this.executorId == this.executorIdOld
            } else if (authUser == this.executorId) {
                return this.statusOld == this.status
            }
            return (this.creatorId != authUser && this.executorId != authUser)
        }
    },
    mounted() {
        if (this.$store.state.error != null) {
            this.$store.commit('changeEror', null)
        }
        this.getDataTask()
        this.getUsers()
        this.getComments()

    }
}
</script>


<style scoped>
/* Базовые стили */
.comment-header {
    flex-wrap: nowrap;
    /* Запрещаем перенос элементов по умолчанию */
    align-items: baseline;
    /*Выравниваем элементы по базовой линии текста*/
}

.comment-header h5 {
    margin-bottom: 0;
    /* Убираем отступ снизу для h5 */
    margin-right: auto;
    /*  Прижимаем h5 к левому краю, а дату к правому  */
}

/* Стили для маленьких экранов */
@media (max-width: 576px) {
    .comment-header {
        flex-direction: column;
        /* Переключаем направление flexbox на столбец */
        flex-wrap: wrap;
        /* Разрешаем перенос элементов */
    }

    .comment-header h5 {
        margin-right: 0;
        /* Убираем margin-right на маленьких экранах */
    }
}
</style>