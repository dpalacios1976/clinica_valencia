<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name') - @yield('title')}} Wellness Login</title> --}}
    <title>Wellness Login</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles Css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>
<body>
        <div class="div-main">            
            <div class="login-main">

                <!-- Creating a SVG 1 image -->
                <svg class="svg3" viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
                    <defs>
                        <linearGradient id="gradient">
                          <stop offset="0%" stop-color="#bdd8fa" />
                          <stop offset="30%" stop-color="#3b97f2" />
                        </linearGradient>
                      </defs>
                    <path d="M0 100 l 0 250 l 200 0 c 15 -90 -95 -10 -80 -100 q 10 -45 -40 -50 c -85 -15 15 -90 -80 -100"
                        style="stroke:none; fill: url(#gradient);">
                    </path>
                </svg>

                <!-- Creating a SVG 2 image -->
                <svg class="svg4" viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
                    <defs>
                        <linearGradient id="gradient2">
                            <stop offset="0%" stop-color="#3b97f2" />
                          <stop offset="60%" stop-color="rgba(17, 84, 143, 0.65)" />
                        </linearGradient>
                      </defs>
                      <path d="M150 0 l 100 0 l 0 150 c -45 3 3 -60 -40 -60 q -25 0 -20 -30 c 10 -45 -45 5 -40 -60"
                        style="stroke:none; fill: url(#gradient2);">
                    </path>
                </svg>

                <div class="div-logo">
                    <div class="div-mod-logo">
                        <i class="fa-brands fa-laravel fa-5x"></i>
                        <label style="padding: 5px 15px 15px 70px" for=""> Wellness System </label>
                    </div>
                    <div class="div-mod-label">
                        <label class="mod-label" for=""> Bienvenido </label>
                        {{--  <label class="mod-label" for=""> Hola! <br> Bienvenido de nuevo</label>  --}}
                    </div>
                </div>
                <div class="div-form">
                    <div class="div-title">
                        <h1>Inicio de Sesión</h1>
                    </div>
                    @if (session()->has('message_data'))
                        <div class="alert alert-info">
                            {{ session()->get('message_data') }}
                        </div>
                    @endif

                    <form action="{{ route('authenticate') }}" method="post">
                        @csrf
                    
                        <div class="group-inputs">
                            <label class="custom_label" for="username">USUARIO</label>
                            <i class="custom_icon fa-solid fa-user fa-lg"></i>
                            <input type="text" id="username" name="username" 
                                class="custom_input @error('title') is-invalid @enderror" 
                                placeholder="Ingrese su usuario" required autocomplete="off" autofocus>

                            @error('username')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="group-inputs">
                            <label class="custom_label" for="password">CONTRASEÑA</label>
                            <i class="custom_icon fa-solid fa-key fa-lg"></i>
                            <input type="password" id="password" name="password" 
                                class="custom_input @error('password') is-invalid @enderror" 
                                placeholder="Ingrese su contraseña" required>

                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="group-inputs">
                            <input type="checkbox" name="remember" id="remember" class="custom_chek">
                            <label for="remember" class="label_check">Recuerdame</label>
                        </div>

                        <div class="group-buttons">
                            <button class="btn btn-success custom_button" type="submit">
                                <span style="font-size: 17px; padding: 20px 20px;"> INICIAR SESION </span>
                                <i class="fa-solid fa-angle-right fa-lg"></i>
                            </button>
                        </div>
                        
                    </form>
                    
                    {{-- <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div> --}}
                </div>
            </div>
        </div>

</body>
</html>