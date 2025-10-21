@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh; background-color: #b7d2edff;">
    <div class="card shadow-lg p-4" style="width: 400px; border-radius: 12px;">
        <h3 class="text-center mb-4">Register</h3>

        @if (session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif

        <form action="{{ route('register.perform') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label fw-semibold">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email">
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password">
            </div>

            <button type="submit" class="btn btn-primary w-100 py-2">Register</button>
        </form>
    </div>
</div>
@endsection
