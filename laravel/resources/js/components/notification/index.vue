<template>
    <div class="nxl-content" v-if="notification != null">

        <div class="main-content">
            <div class="row">

                <div class="col-12">
                    <div class="card stretch stretch-full">
                        <div class="card-body">
                            <div v-if="notification">
                                <h5 class="card-text mb-3" v-if="notification.notification.trigger_type == 'created'">
                                    Тип: создание задачи
                                </h5>
                                <h5 class="card-text mb-3"
                                    v-else-if="notification.notification.trigger_type == 'status_changed'">Тип:
                                    изменение статуса задачи
                                </h5>
                                <h5 class="card-text mb-3" v-else>Тип: новый комментарий
                                </h5>
                                <h5 class="card-text mb-3">Исполнитель - {{ notification.notification.executor.name
                                    }}(почта:{{
                                        notification.notification.executor.email }})
                                </h5>
                                <p class="card-text">{{ notification.time }}</p>
                                <hr>
                                <p class="card-text">Область: <strong>{{ notification.notification.area }} </strong></p>
                                <p class="card-text">Создатель:<strong>{{ notification.notification.creator.name
                                        }}(почта:{{ notification.notification.creator.email }})</strong></p>

                                <p class="card-text">Дата создания:<strong>{{ notification.notification.created_at
                                        }}</strong></p>
                                <p class="card-text">Текст оповещения:<strong>{{ notification.notification.text
                                        }}</strong></p>
                                <p class="card-text">Список email пользователей:
                                    <strong>{{ notification.notification.recipients }}</strong>
                                </p>
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-outline-primary" @click="goToTask">Перейти на страницу задачи</button>
                                </div>
                            </div>
                            <div v-else>
                                <div class="alert alert-danger text-center">
                                    Нет такого уведомления
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

</template>

<script>
import axios from 'axios';

const authUser = window.Laravel.userId
export default {
    data() {
        return {
            notificationId: '',
            notification: null,
        }
    },
    methods: {
        goToTask(){
            window.location.href = `/tasks/${this.notification.notification.task_id}`;

        },
        getNotificationIdFromPath() {
            const path = window.location.pathname;

            const match = path.match(/\/notification\/(\d+)/);

            if (match && match[1]) {
                this.notificationId = match[1];
            }
        },
        async getNotification() {
            try {
                const response = await axios.get('/api/getNotification', {
                    params: {
                        userid: authUser,
                        id: this.notificationId
                    }
                })
                this.notification = response.data.notification[0] || false
            } catch (e) {
                throw e
            }
        }
    },
    async mounted() {
        this.getNotificationIdFromPath()
        await this.getNotification()
    }
}
</script>