<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} - @yield('title') </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles Css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <!-- Styles Css Fullcalendar -->
    <link rel="stylesheet" href="{{ asset('fullcalendar-5.11.2/lib/main.min.css') }}">

</head>
<body>
    <div class="wrapper">
        
        <!-- Sidebar -->
        @include('templates.sidebar')
        <!-- End of Sidebar -->

        <!-- Middle Content -->
        <div class="container-main">
            <!-- Navbar -->
            @include('templates.navbar')
            <!-- End of Navbar -->

            <!-- Main Content -->
            <div class="content-middle">
                @yield('content')
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Middle Content -->

    </div>    

    <!-- Script for Sidebar -->
    <script src="{{ asset('js/master.js') }}" defer></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>

    <!-- Scripts Jquery-->
    <script src="{{ asset('jquery-3.6.0/jquery-3.6.0.min.js') }}"></script>

    <!-- Scripts Fullcalendar-->
    <script src="{{ asset('fullcalendar-5.11.2/lib/main.min.js') }}"></script>
    <script src="{{ asset('fullcalendar-5.11.2/lib/locales-all.js') }}"></script>

    <!-- Scripts -->
    @yield('script')

</body>
</html>
