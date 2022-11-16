<header class="hsh-header-auth-container">
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
                    @lang('auth/login.sign_in')
                </a>
            </li>
            <li class="hsh-header-auth-item">
                <a class="hsh-link" href="auth/register">
                    @lang('auth/login.sign_up')
                </a>
            </li>
        </ul>


        <a href="{{route('localization.set', ['es'])}}">Español</a>
        <a href="{{route('localization.set', ['en'])}}">Ingles</a>
    </nav>
</header>
