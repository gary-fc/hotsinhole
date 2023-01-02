@extends('layouts.auth')

@section('title','Register')

@section('content')
    <section class="hsh-register-container">
        <article class="hsh-register-container-left">
            <section class="hsh-register-container-form">
                <section class="hsh-register-title-container">
                    <h1 class="hsh-register-title">@lang('auth/register.create_account')</h1>
                    <label class="hsh-register-subtitle">@lang('auth/register.create_account_description')
                        <span class="">
                        @lang('general/general.brand')
                    </span>
                    </label>
                </section>


                {{ Form::open(['url' => 'auth/register', 'method' => 'post','class'=>'hsh-register-form']) }}

                <section class="hsh-register-form-item">
                    {{Form::text('name',$value = null, ['class'=>'', 'placeholder'=> __('auth/register.placeholder_name')])}}
                    {!! $errors->first('name', '<span class="form-text text-danger">:message</span>') !!}
                </section>

                <section class="hsh-register-form-item">
                    {{Form::email("email", $value = null, ['class'=>'', 'placeholder'=> __('auth/register.placeholder_email')])}}
                    {!! $errors->first('email', '<span class="form-text text-danger">:message</span>') !!}
                </section>

                <section class="hsh-register-form-item">
                    {{Form::password("password", ['class'=>'', 'placeholder'=> __('auth/register.placeholder_password')])}}
                    {!! $errors->first('password', '<span class="form-text text-danger">:message</span>') !!}
                </section>

                <section class="hsh-register-form-item">
                    {{Form::password("repeat_password", ['class'=>'', 'placeholder'=> __('auth/register.placeholder_repeat_password')])}}
                    {!! $errors->first('repeat_password', '<span class="form-text text-danger">:message</span>') !!}
                </section>

                {{--                <section class="hsh-register-form-item">--}}
                {{--                    @include('shared.forms.fire_toggle', ['name'=> 'privacy_policy'])--}}
                {{--                    {!! $errors->first('privacy_policy', '<span class="form-text text-danger">:message</span>') !!}--}}
                {{--                </section>--}}

                <section class="hsh-h-captcha">
                    @include('shared/captcha/h-captcha')
                </section>


                <section class="hsh-register-form-item-btn">
                    {{Form::submit(__('auth/register.btn_sign_up'))}}
                </section>

                {{ Form::close() }}
            </section>
        </article>

        <article class="hsh-register-container-right">
            <section class="hsh-register-container-image">
                <img class="hsh-register-container-image-right"
                     src="https://images.pexels.com/photos/5187657/pexels-photo-5187657.jpeg?cs=srgb&dl=pexels-anna-shvets-5187657.jpg&fm=jpg&_gl=1*8palc1*_ga*MTExNjU2MDA4MS4xNjYyNDI2MTUy*_ga_8JE65Q40S6*MTY2ODU3NjY5OC4zLjEuMTY2ODU3NzE5OS4wLjAuMA.."/>
            </section>
        </article>
    </section>
@endsection
