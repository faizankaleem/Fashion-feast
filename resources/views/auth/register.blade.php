
@extends('layouts.main-app')

@section('title' , 'Register')
@section('content')
<div class="main-wrapper">
    <div class="login-register-area pt-25 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                </div>

                <div class="col-lg-8 col-md-8">
                    <div class="login-register-wrap register-wrap">
                        <h2 class="text-center"> <i class="fa fa-user-o"></i> <b>Register</b></h2>
                        <div class="login-register-form">
                            <form action="register" method="post">

                                @csrf
                                {{-- First Name--}}
                                <div class="sin-login-register">
                                    <label for="fname">First Name <span>*</span></label>
                                    <input type="text" name="fname" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>
                                    @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                {{-- Last Name --}}
                                <div class="sin-login-register">
                                    <label for="lname"> Last Name <span>*</span></label>
                                    <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>
                                    @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                {{-- Phone --}}
                                <div class="sin-login-register">
                                    <label for="phone"> Phone <span>*</span></label>
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                {{-- Address --}}
                                <div class="sin-login-register">
                                    <label for="add"> Address <span>*</span></label>
                                    <input id="add" type="text" class="form-control @error('add') is-invalid @enderror" name="add" value="{{ old('add') }}" required autocomplete="add" autofocus>
                                    @error('add')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                {{-- Age --}}
                                <div class="sin-login-register">
                                    <label for="age"> Age <span>*</span></label>
                                    <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>

                                    @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                {{-- E-mail --}}
                                <div class="sin-login-register">
                                    <label for="email">Email address <span>*</span></label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                {{-- Password--}}
                                <div class="sin-login-register">
                                    <label for="password">Password <span>*</span></label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                {{-- Confirm Password--}}
                                <div class="sin-login-register">
                                    <label for="password-confirm"> Confirm Password <span>*</span></label>
                                    <input type="password" name="password_confirmation">
                                    @error('password-confirm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#">privacy policy</a></p>
                                <div class="login-register-btn">
                                    <button type="submit">Register</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2"> </div>
            </div>
        </div>
    </div>

</div>
@endsection

