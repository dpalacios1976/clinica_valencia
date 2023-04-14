<div class="info-data">
    <div class="title-date">
        <div class="title-module">
            <h2> @yield('title-module')</h2>
        </div>

        <div class="date">
            @php
                $date = now();
            @endphp
            <span>{{ $date->format('Y-m-d H:i'); }}</span>
        </div>
    </div>

    <div class="menu-top">
        <div class="menu-btn">
            <button id="menu-button">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        <div class="togle-color">
            <i class="fa-solid fa-sun active"></i>
            <i class="fa-solid fa-moon"></i>
        </div>

        <div class="profile">
            <div class="name-user">
                <label>Hola, <b> {{ session('fullname') ?? 'Guest user' }} </b> </label>
                <small>{{ session('rol_name') ?? 'Rol' }}</small>
            </div>
            <div class="img-user">
                <i class="fa-solid fa-user-tie"></i>
            </div>
        </div>
    </div>
</div>