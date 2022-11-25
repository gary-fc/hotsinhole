<header class="hsh-header-auth-main">
    <section class="hsh-header-auth-container">
        <section class="hsh-header-auth-container-image">
            <a href="{{url('/')}}">
                <img class="hsh-header-auth-image"
                     src="{{asset('img/logo_64.png')}}" alt="hotsinhole.png"/>
            </a>
        </section>

        <nav class="hsh-header-auth-nav">
            <ul class="hsh-header-auth-items-list">
                <li class="hsh-header-auth-item">
                    <a class="hsh-link" href="auth/login">
                        @lang('auth/header_auth.home')
                    </a>
                </li>
                <li class="hsh-header-auth-item">
                    <a class="hsh-link" href="auth/login">
                        @lang('auth/header_auth.sign_in')
                    </a>
                </li>
                <li class="hsh-header-auth-item">
                    <a class="hsh-link" href="auth/register">
                        @lang('auth/header_auth.sign_up')
                    </a>
                </li>
            </ul>
        </nav>

        <section class="hsh-header-auth-menu-burger-container">
            <section class="hsh-header-auth-menu-burger" onclick="toggleMenu(this)">
                <section class="hsh-header-auth-menu-burger-bar1"></section>
                <section class="hsh-header-auth-menu-burger-bar2"></section>
                <section class="hsh-header-auth-menu-burger-bar3"></section>
            </section>
        </section>
    </section>

    <section class="hsh-header-auth-mobile">
        <nav class="hsh-header-auth-nav-mobile">
            <ul class="hsh-header-auth-items-list-mobile">
                <li class="hsh-header-auth-item-mobile">
                    <a class="hsh-link" href="auth/login">
                        @lang('auth/header_auth.home')
                    </a>
                </li>
                <li class="hsh-header-auth-item-mobile">
                    <a class="hsh-link" href="auth/login">
                        @lang('auth/header_auth.sign_in')
                    </a>
                </li>
                <li class="hsh-header-auth-item-mobile">
                    <a class="hsh-link" href="auth/register">
                        @lang('auth/header_auth.sign_up')
                    </a>
                </li>
            </ul>
        </nav>
    </section>

    {{--    <a href="{{route('localization.set', ['es'])}}">Español</a>--}}
    {{--    <a href="{{route('localization.set', ['en'])}}">Ingles</a>--}}
</header>


<script>
    function toggleMenu(x) {
        x.classList.toggle("change");
        let menu = document.getElementsByClassName("hsh-header-auth-main")[0];
        menu.classList.toggle("open-menu");
        menu.style.transition = "0.4s"
    }
</script>
