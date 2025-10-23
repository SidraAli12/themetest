<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forgot Password</title>
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
                    
                    {{-- Forgot Password Form --}}
                    <form class="form w-100" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        
                        <div class="text-center mb-10">
                            <h1 class="text-dark fw-bolder mb-3">Forgot Password ?</h1>
                            <div class="text-gray-500 fw-semibold fs-6">
                                Enter your email to reset your password.
                            </div>
                        </div>

                        {{-- Email input --}}
                        <div class="fv-row mb-8">
                            <input type="email" placeholder="Email" name="email"
                                   value="{{ old('email') }}"
                                   class="form-control bg-transparent @error('email') is-invalid @enderror" required />
                            @error('email')
                                <div class="text-danger small mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Success message --}}
                        @if (session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif

                        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                            <button type="submit" class="btn btn-primary me-4">
                                <span class="indicator-label">Submit</span>
                            </button>
                            <a href="{{ route('login.show') }}" class="btn btn-light">Cancel</a>
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
