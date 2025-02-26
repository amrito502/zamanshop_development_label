@extends('customer.master')
@section('customer')
<div class="rts-register-area rts-section-gap bg_light-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="registration-wrapper-1">
                    <div class="logo-area mb--0">
                        <img class="mb--10" src="assets/images/logo/fav.png" alt="logo">
                    </div>
                    <h3 class="title">Login Into Your Account</h3>
                    <form action="{{ route('login.store') }}" method="POST" class="registration-form">
                        @csrf
                        <div class="input-wrapper">
                            <label for="login">Email or Phone*</label>
                            <input type="text" name="login" id="login" value="{{ old('login') }}" required autofocus>
                        </div>
                        <div class="input-wrapper">
                            <label for="password">Password*</label>
                            <input type="password" name="password" id="password" required>
                        </div>
                        <button type="submit" class="rts-btn btn-primary">Login Account</button>
                        <div class="another-way-to-registration">
                            <div class="registradion-top-text">
                                <span>Or Register With</span>
                            </div>
                            <div class="login-with-brand">
                                <a href="#" class="single">
                                    <img src="assets/images/form/google.svg" alt="login">
                                </a>
                                <a href="#" class="single">
                                    <img src="assets/images/form/facebook.svg" alt="login">
                                </a>
                            </div>
                            <p>You Don't Have an Account? <a href="{{ route('sign_up') }}">Register Now</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
