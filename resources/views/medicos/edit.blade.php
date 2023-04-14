@extends('templates.master')
@section('title', 'Medicos')
@section('title-module', 'Medicos')

@section('content')

{{ Breadcrumbs::render('doctor_edit', $doctor) }}

<div class="card border-success">
    <div class="card-body">
        <h3>Datos del medico</h3>
        <label for="" class="mb-3">Los campos marcados con (<span style="color: red; font-size: 1rem;">*</span>) son obligatorios </label>

        <form id="editMedico" action="" method="post">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Nombre completo &nbsp; <span style="color: red">*</span> </span>
                        <input type="text" name="fullname" id="fullname" class="form-control" 
                            placeholder="Ingrese Nombre y Apellido" value="{{ old('fullname', $doctor->names) }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-user"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Cedula / Ruc &nbsp; <span style="color: red">*</span> </span>
                        <input type="text" name="cedula" id="cedula" class="form-control" 
                            placeholder="Ingrese la cedula" value="{{ old('cedula', $doctor->ruc) }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-id-card"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Dirección &nbsp; <span style="color: red">*</span> </span>
                        <input type="text" name="direccion" id="direccion" class="form-control" 
                            placeholder="Ingrese la direccion" value="{{ old('direccion', $doctor->address) }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-map-location-dot"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Codigo Senecyt &nbsp; <span style="color: red">*</span> </span>
                        <input type="text" name="code_senecyt" id="codde_senecyt" class="form-control" 
                            placeholder="Ingrese codigo senecyt" value="{{ old('code_senecyt', $doctor->senecyt_code) }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-id-card"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Celular &nbsp; <span style="color: red">*</span> </span>
                        <input type="text" name="mobile" id="mobile" class="form-control" 
                            placeholder="Ingrese el celular" value="{{ old('mobile', $doctor->mobile) }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-mobile"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Telefono </span>
                        <input type="text" name="telf" id="telf" class="form-control" 
                            placeholder="Ingrese el telefono" value="{{ old('telf', $doctor->mobile2) }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-phone"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Correo &nbsp; <span style="color: red">*</span></span>
                        <input type="email" name="mail" id="mail" class="form-control" 
                            placeholder="Ingrese el correo" aria-label="Correo" value="{{ old('mail', $doctor->email) }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-at"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">logo</span>
                        <input type="file" name="logo" id="logo" class="form-control" 
                            placeholder="Ingrese el correo" aria-label="Correo" value="{{ old('logo') }}">
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
                                    <input type="checkbox" 
                                        name="specialities[]" 
                                        id="{{ $speciality->id }}" 
                                        value="{{ $speciality->id }}"
                                        {{ in_array($speciality->name, $doctor->specialties->pluck('name')->toArray()) ? 'checked' : '' }}>
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
                <div class="d-grid col-4 mx-auto mt-3">
                    <button type="submit" class="btn btn-success" onclick="medicoUpdate()">
                        <i class="fa-solid fa-cloud-arrow-up"></i> Actualizar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection


@section('script')
<script>
    function medicoUpdate()
    {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const form = document.querySelector('#editMedico');
        const form_data = new FormData(document.querySelector('#editMedico'));

        form.addEventListener("submit", function (e) {
            e.preventDefault();

            axios.post('/doctors/{{ $doctor->id }}', form_data)
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