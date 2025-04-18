<template>

    <a class="nxl-head-link me-3" data-bs-toggle="dropdown" href="#" role="button" data-bs-auto-close="outside">
        <i class="feather-bell"></i>
        <span class="badge bg-danger nxl-h-badge" v-if="notifications.length">{{ notifications.length }}</span>
    </a>

    <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-notifications-menu">

        <div class="d-flex justify-content-between align-items-center notifications-head">
            <h6 class="fw-bold text-dark mb-0">Уведомления</h6>
        </div>
        <div class="notifications-item" v-for="(notification, idx) in notifications" :key="idx" v-if="error == null">
            <div class="notifications-desc">
                <a href="javascript:void(0);" @click="currentTask(notification.notification.id)"
                    class="font-body text-truncate-2-line" style="word-break: break-word !important"> {{
                        notification.notification.text }}</a>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="notifications-date text-muted border-bottom border-bottom-dashed">{{
                        notification.time
                        }}</div>
                    <div class="d-flex align-items-center float-end gap-2">
                        <a href="javascript:void(0);" v-if="notification.notification.recipient == authUser"
                            @click="checkNotification(notification.notification.id)" class="text-danger"
                            data-bs-toggle="tooltip" title="Прочитать">
                            <i class="feather-check"></i>

                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="notifications-item" v-else>
            <div class="notifications-desc">
                <a href="javascript:void(0);" @click="currentTask(notification.notification.id)"
                    class="font-body text-truncate-2-line" style="word-break: break-word !important;font-size:10px">
                    <error :error="error"></error>
                </a>
            </div>

        </div>
        <div class="notifications-item" v-if="!notifications.length">
            <div class="font-body text-truncate-2-line text-center">Уведомлений нет</div>
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
            authUser: authUser,
            error: null,
        }
    },
    methods: {
        currentTask(id) {
            window.location.href = `/notification/${id}`;
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
                if (e.response.data.error) {
                    this.error = e.response.data.error
                }
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
                if (e.response.data.error) {
                    this.error = e.response.data.error
                }
                throw e
            }

        },
        handleUpdateData(data) {
            this.notifications = data
        }
    },
    mounted() {
        this.getNotifications()
        window.addEventListener('update-data-notifications', () => {
            this.getNotifications()
        });
    }

}
</script>


<style scoped>
.dropdown-menu.nxl-notifications-menu {
    max-height: 400px;
    overflow-y: auto;
    overflow-x: hidden;
}

.notifications-item {
    padding: 10px;
}
</style>