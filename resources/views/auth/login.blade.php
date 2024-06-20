<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="d-flex align-items-center justify-content-center flex-column text-center bg-primary-subtle">
    <form method="POST" action="{{ route('login') }}" class="">
        @csrf
        <div class="mb-2">
            <label class="auth-labels">Username</label>
            <input type="text" name="name" value="{{ old('username') }}" required class="auth-
            textbox">
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="auth-labels">Password</label>
            <input type="password" name="password" required class="auth-textbox">
            @error('password')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>

@extends('mainLayout')
@section('page-title','Account Login')
@section('auth-content')

@endsection