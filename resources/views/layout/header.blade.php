<nav class="navbar navbar-default">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Городской портал</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Главная</a></li>

                @guest
                    <li class="{{ request()->is('register') ? 'active' : '' }}"><a href="/register">Зарегистрироваться</a>
                    </li>
                    <li class="{{ request()->is('login') ? 'active' : '' }}"><a href="/login">Войти</a></li>
                @endguest


                @auth
                    @can('view-admin-panel', User::class)
                        <li class="{{ request()->is('admin') ? 'active' : '' }}"><a href="/admin">Панель управления</a></li>
                    @endcan
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            {{ auth()->user()->fio }}
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="list.html">Мои заявки</a></li>
                            <li><a href="new.html">Новая заявка</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
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
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
