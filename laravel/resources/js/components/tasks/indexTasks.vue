<template>
    <div v-if="$store.state.error == null">
        <div class="mt-3 mb-3">
            <div class="card mt-5">
                <div class="card-body">
                    <h5 class="card-title">Фильтры</h5>
                    <div class="mb-3">
                        <label>Сортировать по дате:</label>
                        <div>
                            <select class="form-control" v-model="filterDate">
                                <option value="asc">Возрастранию</option>
                                <option value="desc">Убыванию</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Поиск по имени задачи</label>
                        <input type="text" class="form-control" v-model="searchName" placeholder="Введите">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Поиск по всем полям</label>
                        <input type="text" class="form-control" v-model="searchAll" placeholder="Введите">
                    </div>

                    <div class="mb-3">
                        <label>Статус:</label>
                        <div v-for="status in availableStatuses" :key="status">
                            <div class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" :id="'status-' + status" :value="status"
                                    v-model="statusFilters">
                                <label class="form-check-label" :id="'status-' + status" :for="'status-' + status">{{
                                    status
                                }}</label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label>Область:</label>
                        <div>
                            <select class="form-control" v-model="areaFilter">
                                <option value=""></option>
                                <option value="личная">Личная</option>
                                <option value="служебная">Служебная</option>
                                <option value="компания">Компания</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label>Постановщик:</label>
                        <div>
                            <select name="" id="" class="form-control" v-model="creatorFilter">
                                <option value=""></option>
                                <option v-for="(user, idx) in users" :key="idx" :value="user.id">{{ user.name }} ({{
                                    user.email }})
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label>Исполнитель:</label>
                        <div>
                            <select name="" id="" class="form-control" v-model="executorFilter">
                                <option value=""></option>
                                <option v-for="(user, idx) in users" :key="idx" :value="user.id">{{ user.name }} ({{
                                    user.email }})
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">

                    </div>
                </div>
            </div>
        </div>
        <div class="hstack justify-content-between mb-4">
            <div>
                <h5 class="mb-1">Все задачи ({{ search.length }})</h5>
                <span class="fs-12 text-muted">Список всех задач</span>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="card border-dark mb-3 tasks-card widthAdaptive" @click="goToEditTask(task.task)"
                v-for="(task, idx) in paginatedTasks" :key="idx">
                <div class="card-header p-3">
                    <p>Статус: <strong>{{ task.task.status }}</strong></p>
                </div>
                <div class="card-body text-dark">
                    <h5 class="card-title mb-3">{{ task.task.name }}</h5>
                    <h5 class="card-title mb-3">Исполнитель - {{ task.task.executor_id.name }}(почта:{{
                        task.task.executor_id.email }})</h5>
                    <p class="card-text">Дата создания:<strong>{{ task.task.created_at }}</strong></p>
                    <p class="card-text">Дата изменения:<strong>{{ task.task.updated_at }}</strong></p>
                    <p class="card-text">Область:<strong>{{ task.task.area }}</strong></p>
                    <p class="card-text">Постановщик:<strong>{{ task.task.creator_id.name }}(почта:{{
                        task.task.creator_id.email }})</strong></p>
                    <p class="card-text">Описание задачи:<strong>{{ task.task.description }}</strong></p>
                    <p class="card-text" v-if="task.time_in_work">Время в работе:<strong>{{ task.time_in_work
                    }}</strong>
                    </p>
                </div>
            </div>

            <nav aria-label="Page navigation" v-if="totalPages > 1">
                <ul class="pagination justify-content-center">
                    <li class="page-item" :class="{ disabled: currentPage === 1 }">
                        <a class="page-link" @click.prevent="goToPage(currentPage - 1)">Предыдущая</a>
                    </li>

                    <li class="page-item" v-for="page in totalPages" :key="page"
                        :class="{ active: currentPage === page }">
                        <a class="page-link" @click.prevent="goToPage(page)">{{ page }}</a>
                    </li>

                    <li class="page-item" :class="{ disabled: currentPage === totalPages }">
                        <a class="page-link" @click.prevent="goToPage(currentPage + 1)">Следующая</a>
                    </li>
                </ul>
            </nav>
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
            tasks: [],
            searchAll: '',
            searchName: '',
            filterDate: 'asc',
            statusFilters: ['новая'],
            availableStatuses: ['новая', 'принята', 'в работе', 'отложено', 'выполнено', 'отменено'],
            areaFilter: '',
            creatorFilter: '',
            executorFilter: '',
            users: [],
            tasksPerPage: 5, // Количество задач на странице
            currentPage: 1,  // Текущая страница
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
        async getAllTasks() {
            try {
                this.$store.commit('changePreLoader', true)
                const response = await axios.get('/api/getAllTasks')
                this.$store.commit('changePreLoader', false)
                this.tasks = response.data.tasks
            } catch (e) {
                this.$store.commit('changePreLoader', false)
                if (e.response.data.error) {
                    this.$store.commit('changeEror', e.response.data.error)
                }
                throw e
            }
        },
        goToEditTask(task) {
            this.$router.push({ name: 'taskEdit', params: { id: task.id } })
        },
        goToPage(page) {
            if (page >= 1 && page <= this.totalPages) {
                this.currentPage = page;
            }
        },
        compareDates(a, b, order = 'asc') {
            const dateA = new Date(a.task.created_at);
            const dateB = new Date(b.task.created_at);

            let comparison = dateA.getTime() - dateB.getTime();

            return order === 'asc' ? comparison : comparison * -1;
        }
    },
    computed: {
        paginatedTasks() {
            const start = (this.currentPage - 1) * this.tasksPerPage;
            const end = start + this.tasksPerPage;
            return this.search.slice(start, end);
        },
        totalPages() {
            return Math.ceil(this.search.length / this.tasksPerPage);
        },
        search() {
            let tasks = this.tasks
            const searchTerm = this.searchAll.toLowerCase();

            if (this.filterDate) {
                if (this.filterDate == 'asc') {
                    tasks.sort((a, b) => this.compareDates(a, b, 'asc'));
                } else {
                    tasks.sort((a, b) => this.compareDates(a, b, 'desc'));

                }
            }
            if (this.searchName) {
                tasks = tasks.filter(el => {
                    return this.searchName.includes(el.task.name)
                })
            }
            if (searchTerm) {
                tasks = tasks.filter(task => {
                    return Object.values(task.task).some(value => {
                        if (typeof value === 'object' && value !== null) {
                            return Object.values(value).some(nestedValue => {
                                return String(nestedValue).toLowerCase().includes(searchTerm);
                            })
                        } else {
                            return String(value).toLowerCase().includes(searchTerm)
                        }
                    });
                });
            }
            if (this.statusFilters.length > 0) {
                tasks = tasks.filter(el => this.statusFilters.includes(el.task.status))
            }
            if (this.areaFilter != '') {
                tasks = tasks.filter(el => el.task.area == this.areaFilter)
            }
            if (this.creatorFilter != '') {
                tasks = tasks.filter(el => el.task.creator_id.id == this.creatorFilter)
            }
            if (this.executorFilter != '') {
                tasks = tasks.filter(el => el.task.executor_id.id == this.executorFilter)
            }

            return tasks
        }
    },
    mounted() {
        if (this.$store.state.error != null) {
            this.$store.commit('changeEror', null)
        }
        this.getAllTasks()
        this.getUsers()
    }

}
</script>

<style scoped>
.tasks-card:hover {
    background-color: rgb(182, 182, 182);
    cursor: pointer;
}

@media(min-width:580px) {
    .widthAdaptive {
        width: 30rem
    }
}

@media(max-width:579px) {
    .widthAdaptive {
        width: 25rem
    }
}

@media(max-width:478px) {
    .widthAdaptive {
        width: 80vw
    }
}

@media(max-width:200px) {
    .widthAdaptive {
        width: 80vw
    }
}

.btn:focus,
.btn:active,
a:focus,
a:active {
    outline: none !important;
    box-shadow: none;
}
</style>