@extends('customer.master')
@section('customer')
{{-- <div class="container">
    <h2>Register</h2>
    @if(session('error')) <p style="color: red;">{{ session('error') }}</p> @endif
    <form method="POST" action="{{ route('store.sign_up') }}">
        @csrf
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="phone" placeholder="Phone Number" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required><br>
        <button type="submit">Register</button>
    </form>
</div>
 --}}










<div class="rts-register-area rts-section-gap bg_light-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="registration-wrapper-1">
                    <div class="logo-area mb--0">
                        <img class="mb--10" src="assets/images/logo/fav.png" alt="logo">
                    </div>
                    <h3 class="title">Register Into Your Account</h3>
                    <form method="POST" action="{{ route('store.sign_up') }}" class="registration-form">
                        @csrf
                        <div class="input-wrapper">
                            <label for="name">Full Name*</label>
                            <input type="text" name="name" id="name" placeholder="Name">
                        </div>
                        <div class="input-wrapper">
                            <label for="email">Email*</label>
                            <input type="email" name="email" placeholder="Email" id="email">
                        </div>
                        <div class="input-wrapper">
                            <label for="email">Phone*</label>
                            <input type="email" name="phone" placeholder="Phone" id="email">
                        </div>
                        <div class="input-wrapper">
                            <label for="password">Password*</label>
                            <input type="password" name="password" placeholder="Password" id="password">
                        </div>
                        <div class="input-wrapper">
                            <label for="password_confirmation">Confirmation Password*</label>
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" id="password_confirmation">
                        </div>
                        <button type="submit" class="rts-btn btn-primary">Register Account</button>
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
                            <p>Already Have Account? <a href="#">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
