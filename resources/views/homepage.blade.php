<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Landing Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="d-flex justify-content-center flex-column text-center bg-primary-subtle">
    <h1 class="text-center fw-bold">Welcome to the Site</h1>
    <br>
    {{-- <a href="{{ route('logout') }}">Logout</a> --}}
    <form action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="bg-danger-subtle border border-light-subtle">Logout</button>
    </form>
</body>
</html>



<!-- @extends('mainLayout')
@section('page-title','Main Landing Page')
@section('page-content')

@endsection -->