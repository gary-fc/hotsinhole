@extends('layaouts.auth')

@section('title','Login')

@section('content')
    <section class="hsh-login-container">
        <article class="hsh-login-container-left">
            <section class="hsh-login-container-form">
                <h1>@lang('auth/login.create_account')</h1>

                <h3>@lang('auth/login.create_account_description')
                    <span class="">
                        @lang('general/general.brand')
                    </span>
                </h3>

                {{ Form::open(['url' => 'auth/login', 'method' => 'post','class'=>'hsh-login-form']) }}

                <section class="hsh-login-form-item">
                    {{Form::text('name',$value = null, ['class'=>'', 'placeholder'=> __('auth/login.placeholder_name')])}}
                    {!! $errors->first('name', '<span class="form-text text-danger">:message</span>') !!}
                </section>

                <section class="hsh-login-form-item">
                    {{Form::email("email", $value = null, ['class'=>'', 'placeholder'=> __('auth/login.placeholder_email')])}}
                    {!! $errors->first('email', '<span class="form-text text-danger">:message</span>') !!}
                </section>

                <section class="hsh-login-form-item">
                    {{Form::password("password", ['class'=>'', 'placeholder'=> __('auth/login.placeholder_password')])}}
                    {!! $errors->first('password', '<span class="form-text text-danger">:message</span>') !!}
                </section>

                <section class="hsh-login-form-item">
                    @include('shared.forms.fire_toggle', ['name'=> 'privacy_policy'])
                    {!! $errors->first('privacy_policy', '<span class="form-text text-danger">:message</span>') !!}
                </section>

                <section class="hsh-login-fo">
                    {{Form::submit(__('auth/login.btn_sign_up'))}}
                </section>

                {{ Form::close() }}
            </section>
        </article>

        <article class="hsh-login-container-right">
            <section class="hsh-login-container-image">
                <img class="hsh-login-container-image-right"
                     src="https://images.pexels.com/photos/5187657/pexels-photo-5187657.jpeg?cs=srgb&dl=pexels-anna-shvets-5187657.jpg&fm=jpg&_gl=1*8palc1*_ga*MTExNjU2MDA4MS4xNjYyNDI2MTUy*_ga_8JE65Q40S6*MTY2ODU3NjY5OC4zLjEuMTY2ODU3NzE5OS4wLjAuMA.."/>
            </section>
        </article>
    </section>
@endsection
