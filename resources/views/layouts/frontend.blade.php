<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
</head>

<body>

    <div>
        @include('layouts.include.navbar')
        @include('layouts.include.alert')
        @yield('content')
    </div>

    <script src="{{ asset('frontend/js/bootstrap5.bundle.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    @stack('scripts')
</body>

</html>
