<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Everex</title>
    <link rel="stylesheet" href="{{ asset('assets/css/hero.css') }}" />
    @vite(['resources/css/app.css','resources/js/app.js'])
    {{-- ========================= FONT AWSOME ========================= --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('blade_css')
    @yield('blade_js')

</head>
<body class="">
    @include('components.Navigaion')
        @yield('content')
    @include('components.footer')
    @include('components.scroll_top')

    
</body>

</html>