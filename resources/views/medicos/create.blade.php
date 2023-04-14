@extends('templates.master')
@section('title', 'Medicos')
@section('title-module', 'Medicos')

@section('content')

{{ Breadcrumbs::render('doctor_create') }}

<div class="card border-success">
    <div class="card-body">
        <label for="" class="mb-3">Los campos marcados con (<span style="color: red; font-size: 1rem;">*</span>) son obligatorios </label>
        <br>
        <Label>Recomendaciones: </Label>
        <ul>
            <li>Debe ingresar el nombre completo (apellidos nombres) del medico (Darwin Homero Palacios Terán)</li>
        </ul>

        <form id="addMedico" action="{{ route('doctors.store') }}" method="post">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Nombre completo &nbsp; <span style="color: red">*</span> </span>
                        <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Ingrese Apellidos Nombres" value="{{ old('fullname') }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-user"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Cedula / Ruc &nbsp; <span style="color: red">*</span> </span>
                        <input type="text" name="cedula" id="cedula" class="form-control" placeholder="Ingrese la cedula" value="{{ old('cedula') }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-id-card"></i>
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
                        <span class="input-group-text">Dirección &nbsp; <span style="color: red">*</span> </span>
                        <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingrese la direccion" value="{{ old('direccion') }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-map-location-dot"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Tiempo consulta (min) &nbsp; <span style="color: red">*</span> </span>
                        <input type="number" name="time_consul" id="time_consul" class="form-control"  value="{{ old('time_consul') }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-clock"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Codigo Senecyt &nbsp; <span style="color: red">*</span> </span>
                        <input type="text" name="code_senecyt" id="codde_senecyt" class="form-control" placeholder="Ingrese codigo senecyt" value="{{ old('code_senecyt') }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-id-card"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Celular &nbsp; <span style="color: red">*</span> </span>
                        <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Ingrese el celular" value="{{ old('mobile') }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-mobile"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Telefono </span>
                        <input type="text" name="telf" id="telf" class="form-control" placeholder="Ingrese el telefono" value="{{ old('telf') }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-phone"></i>
                        </span>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">logo</span>
                        <input type="file" name="logo" id="logo" class="form-control" placeholder="Ingrese el correo" aria-label="Correo" value="{{ old('logo') }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-file-image"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="div-roles">
                        <h5 for="">Especialidades</h5>
                        <ul class="list-roles">
                            @forelse ($specialities as $speciality)
                                <li>
                                    <input type="checkbox" name="specialities[]" id="{{ $speciality->id }}" value="{{ $speciality->id }}">
                                    <label for="{{ $speciality->id }}">{{ $speciality->name }}</label>
                                </li>
                            @empty
                                <span>Sin registros por mostrar</span>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="d-grid col-3 mx-auto mt-3">
                    <button type="submit" class="btn btn-success" onclick="medicoStore()">
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
    function medicoStore()
    {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const form = document.querySelector('#addMedico');
        const form_data = new FormData(document.querySelector('#addMedico'));

        form.addEventListener("submit", function (e) {
            e.preventDefault();

            axios.post('/doctors', form_data)
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
</script>
@endsection