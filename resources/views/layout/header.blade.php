<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">Городской портал</a>
        <div class="navbar-nav">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Главная</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('register') ? 'active' : '' }}" href="/register">Зарегистрироваться</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="/login">Войти</a>
                        </li>
                    @endguest
    
                    @auth
                        @can('view-admin-panel', User::class)
                            <li class="nav-item">
                                <a href="/admin" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">Панель управления</a>
                            </li>
                        @endcan
                        <li class="nav-item dropdown">
                            <button class="btn btn-secondary dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->fio }}    
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="list.html">Мои заявки</a></li>
                                <li><a class="dropdown-item" href="new.html">Новая заявка</a></li>
                                <li class="dropdown-item">
                                    <form action="{{ route('logout') }}" method="POST" class="logout-form">
                                        @csrf
                                        <button type="submit">
                                            Выход
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</nav>
