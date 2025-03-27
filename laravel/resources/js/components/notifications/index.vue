<template>
    <a class="nxl-head-link me-3" data-bs-toggle="dropdown" href="#" role="button" data-bs-auto-close="outside">
        <i class="feather-bell"></i>
        <span class="badge bg-danger nxl-h-badge" v-if="notifications.length">{{ notifications.length }}</span>
    </a>

    <div  class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-notifications-menu">

        <div class="d-flex justify-content-between align-items-center notifications-head">
            <h6 class="fw-bold text-dark mb-0">Уведомления</h6>

        </div>
        <div class="notifications-item" v-for="(notification, idx) in notifications" :key="idx">
            <div class="notifications-desc">
                <a href="javascript:void(0);" @click="currentTask(notification.notification.task_id)"
                    class="font-body text-truncate-2-line"> {{ notification.notification.text }}</a>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="notifications-date text-muted border-bottom border-bottom-dashed">{{ notification.time
                    }}</div>
                    <div class="d-flex align-items-center float-end gap-2">
                        <a href="javascript:void(0);" v-if="notification.notification.creator_id == authUser" @click="checkNotification(notification.notification.id)"
                            class="text-danger" data-bs-toggle="tooltip" title="Прочитать">
                            <i class="feather-check"></i>

                        </a>
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
            notifications: [],
            authUser:authUser,
        }
    },
    methods: {
        currentTask(id) {
            window.location.href = `/tasks/${id}`;
        },

        async getNotifications() {
            try {
                const response = await axios.get('/api/getNotifications', {
                    params: {
                        userid: authUser
                    }
                })
                this.notifications = response.data.notifications
            } catch (e) {
                throw e
            }
        },
        async checkNotification(id) {
            try {
                const response = await axios.post('/api/checkNotification', {
                    id: id
                })
                this.getNotifications()
            } catch (e) {
                throw e
            }

        }
    },
    mounted() {
        this.getNotifications()
    }

}
</script>