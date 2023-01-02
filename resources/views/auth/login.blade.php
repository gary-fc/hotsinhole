@extends('layouts.auth')

@section('title','Login')

@section('content')
    <section class="hsh-login-container">
        <article class="hsh-login-container-left">
            <section class="hsh-login-container-form">
                <section class="hsh-login-title-container">
                    <h1 class="hsh-login-title">@lang('auth/login.sign_in_account')</h1>
                    <label class="hsh-login-subtitle">@lang('auth/login.sign_in_account_description')
                        <span class="">
                        @lang('general/general.brand')
                    </span>
                    </label>
                </section>


                {{ Form::open(['url' => 'auth/login', 'method' => 'post','class'=>'hsh-login-form']) }}

                <section class="hsh-login-form-item">
                    {{Form::email("email", $value = null, ['class'=>'', 'placeholder'=> __('auth/login.placeholder_email')])}}
                    {!! $errors->first('email', '<span class="form-text text-danger">:message</span>') !!}
                </section>

                <section class="hsh-login-form-item">
                    {{Form::password("password", ['class'=>'', 'placeholder'=> __('auth/login.placeholder_password')])}}
                    {!! $errors->first('password', '<span class="form-text text-danger">:message</span>') !!}
                </section>

                {{--                <section class="hsh-login-form-item">--}}
                {{--                    @include('shared.forms.fire_toggle', ['name'=> 'privacy_policy'])--}}
                {{--                    {!! $errors->first('privacy_policy', '<span class="form-text text-danger">:message</span>') !!}--}}
                {{--                </section>--}}

                <section class="hsh-login-form-item-btn">
                    {{Form::submit(__('auth/login.btn_sign_up'))}}
                </section>

                {{ Form::close() }}
            </section>
        </article>

        <article class="hsh-login-container-right">
            <section class="hsh-login-container-image">
                <img class="hsh-login-container-image-right"
                     src="https://images.pexels.com/photos/1649685/pexels-photo-1649685.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"/>
            </section>
        </article>
    </section>
@endsection
