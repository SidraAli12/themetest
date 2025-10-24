@extends('layout.noAuth')

@section('title', 'Sign Up | Metronic')

@section('content')
    <!--begin::Form Section-->
<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1 justify-content-center">
        <div class="d-flex flex-center flex-column flex-lg-row-fluid">
            <div class="w-lg-500px p-10">
                <form class="form w-100" method="POST" action="{{ route('register.store') }}">
                    @csrf
                    <div class="text-center mb-11">
                        <h1 class="text-dark fw-bolder mb-3">Sign Up</h1>
                        <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
                    </div>

                    <div class="fv-row mb-8">
                        <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" required class="form-control bg-transparent" />
                    </div>

                    <div class="fv-row mb-8">
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required class="form-control bg-transparent" />
                    </div>

                    <div class="fv-row mb-8">
                        <input type="password" name="password" placeholder="Password" required class="form-control bg-transparent" />
                    </div>

                    <div class="fv-row mb-8">
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" required class="form-control bg-transparent" />
                    </div>

                    <div class="fv-row mb-8">
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" required />
                            <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">
                                I accept the <a href="#" class="ms-1 link-primary">Terms</a>
                            </span>
                        </label>
                    </div>

                    <div class="d-grid mb-10 mt-4">
                        <button type="submit" class="btn btn-primary">Sign up</button>
                    </div>

                    <div class="text-gray-500 text-center fw-semibold fs-6">
                        Already have an account?
                        <a href="{{ url('/login') }}" class="link-primary fw-semibold">Sign in</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--begin::Aside Section-->
    <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
     style="background-image: url('{{ asset('assets/media/misc/auth-bg.png') }}'); min-height: 100vh;">

        <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100 text-center">
            <a href="{{ url('/') }}" class="mb-12">
                <img alt="Logo" src="{{ asset('assets/media/logos/custom-1.png') }}" class="h-60px h-lg-75px" />
            </a>
            <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10"
                src="{{ asset('assets/media/misc/auth-screens.png') }}" alt="" />
            <h1 class="text-white fs-2qx fw-bolder mb-7">Fast, Efficient and Productive</h1>
            <div class="text-white fs-base opacity-75">
                Create an account to get access to your personalized dashboard and experience the full Metronic power.
            </div>
        </div>
    </div>
    <!--end::Aside Section-->
@endsection
