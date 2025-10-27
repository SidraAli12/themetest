@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
<div class="container py-10">
    <div class="card shadow-sm">
        <div class="card-body">
            <h3 class="fw-bold mb-5">Welcome, {{ Auth::user()->name }}</h3>
            <p class="text-gray-700">
                This is your dashboard.
            </p>
        </div>
    </div>
</div>
@endsection
