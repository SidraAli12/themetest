@extends('layouts.app')

@section('content')
<div class="container mt-5 text-center">
    <h2>Welcome, {{ auth()->user()->name }} 🎉</h2>
    <p>You are successfully logged in.</p>
</div>
@endsection
