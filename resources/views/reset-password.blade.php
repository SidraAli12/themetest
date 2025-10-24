@extends('layout.noAuth')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reset Password</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.bundle.css') }}" />
</head>

<body id="kt_body" class="app-blank">

<div class="d-flex flex-column flex-root" id="kt_app_root">
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
            <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                <div class="w-lg-500px p-10">
                    
                    {{-- Reset Password Form --}}
                    <form class="form w-100" method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        
                        <div class="text-center mb-10">
                            <h1 class="text-dark fw-bolder mb-3">Setup New Password</h1>
                            <div class="text-gray-500 fw-semibold fs-6">
                                Have you already reset the password?
                                <a href="{{ route('login.show') }}" class="link-primary fw-bold">Sign in</a>
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="fv-row mb-8">
                            <input type="email" placeholder="Email" name="email"
                                   value="{{ old('email') }}"
                                   class="form-control bg-transparent @error('email') is-invalid @enderror" required />
                            @error('email')
                                <div class="text-danger small mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Password --}}
                        <div class="fv-row mb-8">
                            <input type="password" placeholder="Password" name="password"
                                   class="form-control bg-transparent @error('password') is-invalid @enderror" required />
                            @error('password')
                                <div class="text-danger small mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Confirm Password --}}
                        <div class="fv-row mb-8">
                            <input type="password" placeholder="Confirm Password" name="password_confirmation"
                                   class="form-control bg-transparent" required />
                        </div>

                        <div class="d-grid mb-10">
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Right side image --}}
        <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center"
             style="background-image: url({{ asset('assets/media/misc/auth-bg.png') }})">
        </div>
    </div>
</div>

<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
</body>
</html>
