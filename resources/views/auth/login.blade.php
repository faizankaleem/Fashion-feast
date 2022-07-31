@extends('layouts.main-app')

@section('title' , trans('translations.login'))

@section('content')
    <div class="main-wrapper">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
            </div>
            <div class="col-lg-2"></div>
        </div>
        <div class="login-register-area pt-25 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="login-register-wrap register-wrap">
                            <div class="login-register-wrap mr-70">
                                <h2 class="text-center"><i class="fa fa-user-o"></i> <b> Login</b></h2>
                                <div class="login-register-form">
                                    <form method="post" action="{{route('login')}}">
                                        @csrf
                                        <div class="sin-login-register">
                                            <label>Email Address <span>*</span></label>
                                            <input type="email" name="email" required>
                                        </div>
                                        <div class="sin-login-register">
                                            <label>Password <span>*</span></label>
                                            <input type="password" name="password" required>
                                        </div>
                                        @if($errors->any())
                                            <div class="sin-login-register" id="span_row">
                                                <h3 class="text-center text-danger"> {{$errors->first()}}</h3>
                                            </div>
                                        @endif
                                        <div class="login-register-btn-remember">
                                            <div class="login-register-btn">
                                                <button type="submit">Log in</button>
                                            </div>


                                        </div>
{{--                                        <a href="{{route('user.show_reset_password-form')}}">Forget password?</a>--}}
                                        <a href="#">Forget password?</a>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2"></div>
                </div>
            </div>
        </div>

    </div>

@endsection
