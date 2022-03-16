<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <title>Muebles Avenida</title>
    @stack('style')
</head>
<body>
    @include('layouts._nav')
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>  
    @endif
    @yield('content')
    @include('layouts._footer')
    <script src="{{mix('js/app.js')}}"></script>
    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    @stack('script')
</body>
</html>