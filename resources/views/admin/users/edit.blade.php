@extends('templates.master')
@section('title', 'Users')
@section('title-module', 'Usuarios')

@section('content')

    {{ Breadcrumbs::render('user_edit', $user) }}

    <div class="card border-success">
        <div class="card-body">
            <h3>Datos del usuario</h3>
            <form id="editUser" action="" >
                @method('PUT')
                @csrf 
                {{-- <input type="hidden" name="_method" value="PUT"> --}}
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Nombre y apellido &nbsp; <span style="color: red">*</span></span>
                            <input type="text" name="fullname" id="fullname" class="form-control" 
                                placeholder="Ingrese Nombre y Apellido" value="{{ old('fullname', $user->name) }}">
                            <span class="input-group-text">
                                <i class="fa-solid fa-user"></i>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Cedula</span>
                            <input type="text" name="cedula" id="cedula" class="form-control" placeholder="Ingrese la cedula" value="{{ old('cedula', $user->cedula) }}">
                            <span class="input-group-text">
                                <i class="fa-solid fa-id-card"></i>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Usuario &nbsp; <span style="color: red">*</span></span>
                            <input type="text" name="user" id="user" class="form-control" placeholder="Ingrese el usuario" value="{{ old('user', $user->username) }}">
                            <span class="input-group-text">
                                <i class="fa-solid fa-id-badge"></i>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Correo &nbsp; <span style="color: red">*</span></span>
                            <input type="email" name="mail" id="mail" class="form-control" placeholder="Ingrese el correo" aria-label="Correo" value="{{ old('mail', $user->email) }}">
                            <span class="input-group-text">
                                <i class="fa-solid fa-at"></i>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="div-roles">
                            <h4 for="">Roles <span style="color: red">*</span></h4>
                            <ul class="list-roles">
                                @forelse ($roles as $rol)
                                    <li>
                                        <input type="checkbox" 
                                            name="roles[]" 
                                            id="{{ $rol->id }}" 
                                            value="{{ $rol->id }}"
                                            {{ in_array($rol->name, $user->roles->pluck('name')->toArray()) ? 'checked' : '' }}>
                                        <label for="{{ $rol->id }}">{{ $rol->name }}</label>
                                    </li>
                                @empty
                                    <span>Sin registros por mostrar</span>
                                @endforelse
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="div-roles">
                            <label class="mb-2">Medico seleccionado:{{ $user->doctor->names ?? '-' }}</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Medico</span>
                                <input type="text" name="search" id="search" class="form-control" 
                                    placeholder="Ingrese apellido del medico">
                                <button class="btn btn-outline-success" type="button" id="searchButton" onclick="searchDoctor()">
                                    <i class="fa-solid fa-magnifying-glass"></i> Buscar
                                </button>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Medicos</span>
                                <select name="medicos" id="medicos" class="form-control" readonly></select>
                            </div>
                        </div>
                    </div>

                    <div class="d-grid col-3 mx-auto mt-3">
                        <button type="submit" class="btn btn-success" onclick="userUpdate()">
                            <i class="fa-solid fa-cloud-arrow-up"></i> Actualizar datos
                        </button>
                    </div>
                </div>
            </form>

            <hr>
            <h3>Cambiar contraseña</h3>
            <form id="editPass" action="" method="post">
                @csrf
                <div class="row mt-3">
                    <div class="col-md-6 col-sm-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Contraseña Actual</span>
                            <input type="password" name="old_pass" id="old_pass" class="form-control" placeholder="Ingrese la contraseña actual">
                            <span class="input-group-text">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                        </div>
                    </div><div class="col-md-6 col-sm-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Contraseña nueva</span>
                            <input type="password" name="newpass" id="newpass" class="form-control" placeholder="Ingrese la nueva contraseña">
                            <span class="input-group-text">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Confirmar contraseña nueva</span>
                            <input type="password" name="newpass_confirmation" id="newpass_confirmation" class="form-control" placeholder="Ingrese la nueva contraseña">
                            <span class="input-group-text">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="d-grid col-3 mx-auto mt-3">
                    <button type="submit" class="btn btn-success" onclick="userUpdatePass()">
                        <i class="fa-solid fa-cloud-arrow-up"></i> Actualizar contraseña
                    </button>
                </div>
            </form>

        </div>
    </div>
        
@endsection

@section('script')

    <script>        
        function userUpdate()
        {
            const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const form = document.querySelector('#editUser');
            const form_data = new FormData(document.querySelector('#editUser'));

            form.addEventListener("submit", function (e) {
                e.preventDefault();

                axios.post('/management/users/{{ $user->id }}', form_data)
                    .then(function (response) {
                        if (response.data.success) {
                            Swal.fire({
                                icon: 'success',
                                title: response.data.message,
                            }).then(result => {
                                location.reload();
                            });
                        } else {
                            // console.log(response);

                            if (response.data.hasOwnProperty("error")) 
                            {
                                Swal.fire({
                                    icon: 'warning',
                                    title: response.data.message,
                                    text: response.data.error
                                })

                            } else {

                                const article = document.createElement('article');
                                const list = document.createElement('ul');

                                list.setAttribute(
                                    'style',
                                    'list-style-type: none;',
                                );

                                const a_errors = response.data.errors;

                                for (const element in a_errors) {
                                    if (a_errors.hasOwnProperty(element)) 
                                    {    
                                        const item = document.createElement('li');
                                        item.setAttribute(
                                            'style',
                                            'padding-bottom: 5px;',
                                        );
                                        
                                        item.textContent = a_errors[element];
                                        list.appendChild(item);
                                    }
                                }

                                Swal.fire(
                                    response.data.message,
                                    article.appendChild(list),
                                    'warning'
                                )
                            }
                        }
                    })
                    .catch(function (error) {
                        Swal.fire({
                            icon: 'error',
                            title: error.data.message,
                            text: error.data.error
                        })
                    });
            });
        }

        function userUpdatePass()
        {
            const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const form = document.querySelector('#editPass');
            const form_data = new FormData(document.querySelector('#editPass'));
            // const user = document.querySelector('#user_id');

            form.addEventListener("submit", function (e) {
                e.preventDefault();

                axios.post('/management/userspass/{{ $user->id }}', form_data)
                    .then(function (response) {
                        if (response.data.success) {
                            Swal.fire({
                                icon: 'success',
                                title: response.data.message,
                            }).then(result => {
                                location.reload();
                            });
                        } else {

                            if (response.data.hasOwnProperty("error")) 
                            {
                                Swal.fire({
                                    icon: 'warning',
                                    title: response.data.message,
                                    text: response.data.error
                                })

                            } else {

                                const article = document.createElement('article');
                                const list = document.createElement('ul');

                                list.setAttribute(
                                    'style',
                                    'list-style-type: none;',
                                );

                                const a_errors = response.data.errors;

                                for (const element in a_errors) {
                                    if (a_errors.hasOwnProperty(element)) 
                                    {    
                                        const item = document.createElement('li');
                                        item.setAttribute(
                                            'style',
                                            'padding-bottom: 5px;',
                                        );
                                        
                                        item.textContent = a_errors[element];
                                        list.appendChild(item);
                                    }
                                }

                                Swal.fire(
                                    response.data.message,
                                    article.appendChild(list),
                                    'warning'
                                )
                            }
                        }
                    })
                    .catch(function (error) {
                        Swal.fire({
                            icon: 'error',
                            title: error.data.message,
                            text: error.data.error
                        })
                    });
            });

        }

        function searchDoctor()
    {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const searchButton = document.querySelector('#searchButton');
        const search = document.querySelector('#search');
        const medicos = document.querySelector('#medicos');

        let options = document.querySelectorAll('#medicos option');
        options.forEach(o => o.remove());

        var id = search.value;
        var data = {search:id};

        const form_data = new FormData();
        form_data.append('search', id);

        if (id) 
        {
            axios.post('/management/users/doctors', form_data)
                .then(function (response) {
                    if (response.data.success) {

                        const doctors = response.data.data;
                        medicos.removeAttribute("readonly");

                        let option_empty = document.createElement('option');
                        option_empty.text = "--- seleccione ---";
                        option_empty.value = "";
                        medicos.appendChild(option_empty);

                        for (let x of doctors) {
                            const option = document.createElement('option');
                            option.text = x.names;
                            option.value = x.id;
                            medicos.appendChild(option);
                        }
                    } else {
                        if (response.data.hasOwnProperty("error")) 
                        {
                            Swal.fire({
                                icon: 'warning',
                                title: response.data.message,
                                text: response.data.error,
                            })
                        }
                    }
                })
                .catch(function (error) {
                    Swal.fire({
                        icon: 'error',
                        title: error.data.message,
                        text: error.data.error,
                    })
                });
        }else{
            medicos.setAttribute("readonly", true);
            Swal.fire({
                icon: 'info',
                title: 'Informacion',
                text: 'Ingrese al menos un apellido'
            })
        }
    }
        
    </script>
@endsection
