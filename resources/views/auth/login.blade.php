@extends('layouts.master')

<style>
    #bgVideo {
        position: absolute;
        top: 80%;
        left: 55%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -1;
        transform: translate(-50%, -50%);
        object-fit: cover;
        display: block !important;
    }

    .section.login-section {
        position: relative;
        overflow: hidden;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: transparent !important;
        padding-top: 80px;
    }

    .login-box {
        background: rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        padding: 40px;
        border-radius: 25px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0px 15px 35px rgba(0,0,0,0.5);
        width: 100%;
        max-width: 450px;
    }

    .login-box input {
        background: rgba(255, 255, 255, 0.9) !important;
        border: none;
        height: 50px;
        border-radius: 10px;
        margin-bottom: 20px;
        padding-left: 20px;
    }

    .login-btn {
        width: 100%;
        background: #f5a425;
        color: white;
        border: none;
        padding: 15px;
        border-radius: 10px;
        font-weight: bold;
        font-size: 16px;
        transition: 0.3s;
        cursor: pointer;
    }

    .login-btn:hover {
        background: #e0931d;
        transform: scale(1.02);
    }
</style>

@section('content')
<section class="section login-section">
    <video autoplay muted loop playsinline id="bgVideo">
        <source src="{{ asset('assets/frontend/images/login-bg.mp4') }}" type="video/mp4">
    </video>

    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.4); z-index: 0;"></div>

    <div class="container" style="position: relative; z-index: 1;">
        <div class="row justify-content-center">
            <div class="login-box">
                <div class="text-center" style="margin-bottom: 30px;">
                    <h2 style="color: #f5a425; text-shadow: 2px 2px 15px rgba(0,0,0,0.9);">Login</h2>
                    <p style="color: white;">Enter your credentials to access your portal</p>
                </div>

                {{-- Validation Errors --}}
                @if ($errors->any())
                    <div style="color: #ff4d4d; margin-bottom: 20px; text-align: center; font-size: 14px; background: rgba(0,0,0,0.3); padding: 10px; border-radius: 10px;">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email Address" required autofocus>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>

                    <div style="display: flex; justify-content: space-between; margin-bottom: 20px; color: white; font-size: 14px;">
                        <label><input type="checkbox" name="remember"> Remember Me</label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" style="color: #f5a425; text-decoration: none;">Forgot Password?</a>
                        @endif
                    </div>

                    <button type="submit" class="login-btn">LOGIN</button>
                </form>
                <div class="text-center" style="margin-top: 20px; color: white;">
                    <p>Don't have an account? <a href="{{ route('register') }}" style="color: #f5a425; font-weight: bold; text-decoration: none;">Register Now</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
