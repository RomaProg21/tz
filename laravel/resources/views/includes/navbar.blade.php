<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{route('tasks')}}" class="b-bran">
                <!-- ========   change your logo hear   ============ -->
                <h3 class="logo logo-lg">Task Manager</h3>
                <p class="logo logo-sm">Task Manager</p>
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Навигация</label>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{route('users')}}" class="nxl-link" style="display:flex">
                        <span class="nxl-micon"><i class="feather-airplay"></i></span>
                        <span class="nxl-mtext">Пользователи</span>
                    </a>

                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{route('tasks')}}" class="nxl-link"  style="display:flex">
                        <span class="nxl-micon"><i class="feather-check"></i></span>
                        <span class="nxl-mtext">Задачи</span>
                    </a>
                </li>

            </ul>
            
        </div>
    </div>
</nav>