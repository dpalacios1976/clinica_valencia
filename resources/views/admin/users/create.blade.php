@extends('templates.master')
@section('title', 'Users')
@section('title-module', 'Usuarios')

@section('content')

    {{ Breadcrumbs::render('user_create') }}

    <div class="card border-success">
        <div class="card-body">
            <label for="" class="mb-3">Los campos marcados con (<span style="color: red; font-size: 1rem;">*</span>) son obligatorios </label>
            <br>
            <Label>Recomendaciones: </Label>
            <ul>
                <li>Puede ingresar un nombre y un apellido o el nombre completo (Juan Perez)</li>
                <li>Sugerencias para nombres de usuario primera letra del nombre seguido de un pumto o guien del apellido (j.perez, j_perez)</li>
                <li>La contraseña debe tener: una letra mayúscula, una letra minúscula y un número,</li>
                <li>Si selecciona el rol Medico, debe buscar el medico y seleccionar.</li>
            </ul>
            <form id="addUser" action="{{ route('admin.users.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Nombre y apellido &nbsp; <span style="color: red">*</span> </span>
                            <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Ingrese Nombre y Apellido" value="{{ old('fullname') }}">
                            <span class="input-group-text">
                                <i class="fa-solid fa-user"></i>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Cedula </span>
                            <input type="text" name="cedula" id="cedula" class="form-control" placeholder="Ingrese la cedula" value="{{ old('cedula') }}">
                            <span class="input-group-text">
                                <i class="fa-solid fa-id-card"></i>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Usuario &nbsp; <span style="color: red">*</span></span>
                            <input type="text" name="user" id="user" class="form-control" placeholder="Ingrese el usuario" value="{{ old('user') }}">
                            <span class="input-group-text">
                                <i class="fa-solid fa-id-badge"></i>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Correo &nbsp; <span style="color: red">*</span></span>
                            <input type="email" name="mail" id="mail" class="form-control" placeholder="Ingrese el correo" aria-label="Correo" value="{{ old('mail') }}">
                            <span class="input-group-text">
                                <i class="fa-solid fa-at"></i>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Contraseña &nbsp; <span style="color: red">*</span></span>
                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Ingrese contraseña">
                            <span class="input-group-text">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Confirmar contraseña &nbsp; <span style="color: red">*</span></span>
                            <input type="password" name="confpass" id="confpass" class="form-control" placeholder="Confimar contraseña">
                            <span class="input-group-text">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="div-roles">
                            <h4 for="">Roles <span style="color: red">*</span></h4>
                            <ul class="list-roles">
                                @forelse ($roles as $rol)
                                    <li>
                                        <input type="checkbox" name="roles[]" id="{{ $rol->id }}" value="{{ $rol->id }}">
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

                    <div class="d-grid col-4 mx-auto mt-3">
                        <button type="submit" class="btn btn-success" onclick="userStore()">
                            <i class="fa-solid fa-cloud-arrow-up"></i> Guardar
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </div>
        
@endsection

@section('script')
<script>

    function userStore()
    {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const form = document.querySelector('#addUser');
        const form_data = new FormData(document.querySelector('#addUser'));

        form.addEventListener("submit", function (e) {
            e.preventDefault();

            axios.post('/management/users', form_data)
                .then(function (response) {
                    if (response.data.success) 
                    {
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
                    // console.log(error.data.error);
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
