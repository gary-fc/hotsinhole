@php
    use Illuminate\Support\Facades\Auth;
@endphp
<header class="hsh-header-main-main">
    <section class="hsh-header-main-container">
        <section class="hsh-header-main-container-image">
            <a href="{{url('/')}}">
                <img class="hsh-header-main-image"
                     src="{{asset('img/logo_64.png')}}" alt="hotsinhole.png"/>
            </a>
            <label class="hsh-header-main-logo-text">
                Hotsinhole
            </label>
        </section>

        <nav class="hsh-header-main-nav">
            <ul class="hsh-header-main-items-list">
                @if(Auth::user())
                    <li class="hsh-header-main-item">
                        <a class="hsh-link" href="auth/logout">
                            @lang('auth/headers/header_main.logout')
                        </a>
                    </li>
                    <li class="hsh-header-main-item hsh-header-main-item-post-add">
                        <a class="hsh-link" href="auth/login">
                            @lang('auth/headers/header_main.post_your_add')
                        </a>
                    </li>
                @else
                    <li class="hsh-header-main-item">
                        <a class="hsh-link" href="auth/login">
                            @lang('auth/headers/header_main.home')
                        </a>
                    </li>
                    <li class="hsh-header-main-item">
                        <a class="hsh-link" href="auth/login">
                            @lang('auth/headers/header_main.sign_in')
                        </a>
                    </li>
                    <li class="hsh-header-main-item">
                        <a class="hsh-link" href="auth/register">
                            @lang('auth/headers/header_main.sign_up')
                        </a>
                    </li>
                @endif
            </ul>
        </nav>

        <section class="hsh-header-main-menu-burger-container">
            <section class="hsh-header-main-menu-burger" onclick="toggleMenu(this)">
                <section class="hsh-header-main-menu-burger-bar1"></section>
                <section class="hsh-header-main-menu-burger-bar2"></section>
                <section class="hsh-header-main-menu-burger-bar3"></section>
            </section>
        </section>
    </section>

    <section class="hsh-header-main-mobile">
        <nav class="hsh-header-main-nav-mobile">
            <ul class="hsh-header-main-items-list-mobile">
                <li class="hsh-header-main-item-mobile">
                    <a class="hsh-link" href="auth/login">
                        @lang('auth/headers/header_main.home')
                    </a>
                </li>
                @if(Auth::user())
                    <li class="hsh-header-main-item-mobile">
                        <a class="hsh-link" href="{{route('logout', $subdomain)}}">
                            @lang('auth/headers/header_main.logout')
                        </a>
                    </li>
                @else
                    <li class="hsh-header-main-item-mobile">
                        <a class="hsh-link" href="auth/login">
                            @lang('auth/headers/header_main.sign_in')
                        </a>
                    </li>
                    <li class="hsh-header-main-item-mobile">
                        <a class="hsh-link" href="auth/register">
                            @lang('auth/headers/header_main.sign_up')
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
    </section>

    {{--    <a href="{{route('localization.set', ['es'])}}">Español</a>--}}
    {{--    <a href="{{route('localization.set', ['en'])}}">Ingles</a>--}}
</header>


<script>
    function toggleMenu(x) {
        x.classList.toggle("change");
        let menu = document.getElementsByClassName("hsh-header-main-main")[0];
        menu.classList.toggle("open-menu");
        menu.style.transition = "0.4s"
    }
</script>
