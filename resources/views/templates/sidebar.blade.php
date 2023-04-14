<aside>
    <div class="top">
        <div class="logo">
            <img src="{{ asset('images/LogoCloudMedical.jpeg') }}" alt="logo">
            {{-- <i class="fa-brands fa-laravel fa-2x"></i> --}}
            <h3><span class="primary">CloudMedical</span></h3>
        </div>
        <div class="close" id="close-button">
            <i class="fa-solid fa-xmark fa-2x"></i>
        </div>
    </div>
    <div class="sidebar">
        <a href="{{ route('home') }}" class="{{ (request()->is('home')) ? 'active' : '' }}">
            <i class="fa-solid fa-chart-line fa-lg"></i>
            <span>Dashboard</span>
        </a>

        {{-- @hasrole('Admin') --}}
        @can('management')
            <a href="{{ route('management') }}" class="{{ (request()->is('management*')) ? 'active' : '' }}">
                <i class="fa-solid fa-users-gear fa-lg"></i>
                <span>Gestion de usuarios</span>
            </a>
        @endcan
        {{-- @endhasrole --}}
        @can('doctors.index')
            <a href="{{ route('doctors.index') }}" class="{{ (request()->is('doctors*')) ? 'active' : '' }}">
                <i class="fa-solid fa-user-doctor fa-lg"></i>
                <span>Gestion de medicos</span>
            </a>
        @endcan

        @can('establishments.index')
            <a href="{{ route('establishments.index') }}" class="{{ (request()->is('establishments*')) ? 'active' : '' }}">
                <i class="fa-solid fa-gears fa-lg"></i>
                <span>Parametros</span>
            </a>
        @endcan

        <a href="{{ route('agendas.index') }}" class="{{ (request()->is('agendas*')) ? 'active' : '' }}">
            <i class="fa-solid fa-calendar-days fa-lg"></i>
            <span>Agenda</span>
        </a>

        @can('patients.index')
            <a href="{{ route('patients.index') }}" class="{{ (request()->is('patients*')) ? 'active' : '' }}">
                <i class="fa-solid fa-users fa-lg"></i>
                <span>Admision Pacientes</span>
            </a>
        @endcan

        @can('management')
            <a href="#">
                <i class="fa-solid fa-user-doctor fa-lg"></i>
                <span>Pacientes</span>
            </a>
        @endcan
         
        @can('atention.index')
         <a href="{{ route('attentions.index') }}" class="{{ (request()->is('attention*')) ? 'active' : '' }}">
            <i class="fa-solid fa-book-medical fa-lg"></i>
            <span>Historia Clinica</span>
        </a>
        @endcan
        {{--
        <a href="#">
            <i class="fa-solid fa-envelope fa-lg"></i>
            <span>Mensajes <span class="messages-count">{{ $messages_new ?? 0 }}</span></span>
        </a>
        <a href="#">
            <i class="fa-solid fa-file-arrow-down fa-lg"></i>
            <span>Reportes</span>
        </a> --}}

        <div class="logout">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <a href="#" onclick="this.closest('form').submit()">
                    <i class="fa-solid fa-right-from-bracket fa-lg"></i>
                    <span>Cerrar Sesión</span>
                </a> 
            </form>

            <a href="https://www.tecnihealth.com.ec" target="_blank">
                <figure>
                    <small>
                        Copyright &copy; 2023 Tecnihealth
                    </small>
                </figure>
            </a>
        </div>
        

    </div>
</aside>