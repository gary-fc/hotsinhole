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

                {{ Form::open(['url' => 'foo/bar','class'=>'']) }}

                {{Form::text('email',$value = null, ['class'=>'hsh-txt', 'placeholder'=> __('auth/login.placeholder_name')])}}

                {{Form::email("email", $value = null, ['class'=>'hsh-txt', 'placeholder'=> __('auth/login.placeholder_email')])}}

                {{Form::password("password", ['class'=>'hsh-txt', 'placeholder'=> __('auth/login.placeholder_password')])}}

                <div class="toggle dog-rollover">
                    <input id="doggo" type="checkbox"/>
                    <label class="toggle-item" for="doggo">
                        <div class="fire">
                            <div class="flames">
                                <div class="flame off-1"></div>
                                <div class="flame off-2"></div>
                                <div class="flame off-3"></div>
                                <div class="flame off-4"></div>
                            </div>
                        </div>
                        <span class="toggle-no" style="color: white">No</span>
                        <span class="toggle-yes" style="color: white">Yes</span>
                    </label>
                </div>

                {{Form::submit(__('auth/login.btn_sign_up'))}}

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
