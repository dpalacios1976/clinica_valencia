@extends('templates.master')
@section('title', 'Parametros')
@section('title-module', 'Parametros')

@section('content')

{{ Breadcrumbs::render('establishment_edit', $establishment) }}

<div class="card border-success">
    <div class="card-body">
        <h3>Datos del medico</h3>

        <label for="" class="mb-3">Los campos marcados con (<span style="color: red; font-size: 1rem;">*</span>) son obligatorios </label>

        <form id="editEstablecimiento" action="" method="post">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Ruc &nbsp; <span style="color: red">*</span> </span>
                        <input type="text" name="ruc" id="ruc" class="form-control" 
                            placeholder="Ingrese el ruc" value="{{ old('ruc', $establishment->ruc) }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-id-card"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Razon social &nbsp; <span style="color: red">*</span> </span>
                        <input type="text" name="razon_social" id="razon_social" class="form-control" 
                            placeholder="Ingrese razon social" value="{{ old('razon_social', $establishment->razon_social) }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-hospital"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Nombre comercial &nbsp; <span style="color: red">*</span> </span>
                        <input type="text" name="nombre_comercial" id="nombre_comercial" class="form-control" 
                            placeholder="Ingrese el nombre comercial" value="{{ old('nombre_comercial', $establishment->nombre_comercial) }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-hospital"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Dirección &nbsp; <span style="color: red">*</span> </span>
                        <input type="text" name="direccion" id="direccion" class="form-control" 
                            placeholder="Ingrese la direccion" value="{{ old('direccion', $establishment->direccion) }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-map-location-dot"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Contribuyente especial &nbsp; <span style="color: red">*</span> </span>
                        <input type="text" name="cont_especial" id="cont_especial" class="form-control" 
                            placeholder="Ingrese contibuyente especial" value="{{ old('cont_especial', $establishment->contribuyente_especial) }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-user"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Contabilidad &nbsp; <span style="color: red">*</span></span>
                        <div class="input-group-text">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="contabilidad" id="c1" value="1" @checked($establishment->contabilidad === 1)>
                                <label class="form-check-label" for="inlineCheckbox1">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="contabilidad" id="c2" value="0" @checked($establishment->contabilidad === 0)>
                                <label class="form-check-label" for="inlineCheckbox1">No</label>
                            </div>
                        </div>
                        <span class="input-group-text">
                            <i class="fa-solid fa-receipt"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Ambiente produccion &nbsp; <span style="color: red">*</span></span>
                        <div class="input-group-text">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="produccion" id="p1" value="1" @checked($establishment->ambiente_produccion === 1)>
                                <label class="form-check-label" for="inlineCheckbox1">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="produccion" id="p2" value="0" @checked($establishment->ambiente_produccion === 0)>
                                <label class="form-check-label" for="inlineCheckbox1">No</label>
                            </div>
                        </div>
                        <span class="input-group-text">
                            <i class="fa-solid fa-desktop"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Firma electronica </span>
                        <input type="text" name="firma" id="firma" class="form-control" placeholder="Ingrese firma" value="{{ old('firma') }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-signature"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Contraseña </span>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese la contraseña" value="{{ old('password') }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text">logo</span>
                        <input type="file" name="logo" id="logo" class="form-control" value="{{ old('logo') }}">
                        <span class="input-group-text">
                            <i class="fa-solid fa-file-image"></i>
                        </span>
                    </div>
                </div>                

                <div class="col-md-6 col-sm-6">
                    <div class="input-group mb-2">
                        <span class="input-group-text" id="basic-addon1">Nivel</span>
                        <select name="nivel" id="nivel" class="form-control">
                            <option value=""> --- Seleccione ---</option>
                            @forelse ($levels as $level)
                                <option value="{{ $level->id }}" {{ $establishment->level_id === $level->id ? 'Selected' : '' }}>{{ $level->descripcion }}</option>
                            @empty
                                <option value=""> --- Sin registros por mostrar ---</option>
                            @endforelse
                        </select>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="d-grid col-3 mx-auto mt-3">
                    <button type="submit" class="btn btn-success" onclick="establecimientoUpdate()">
                        <i class="fa-solid fa-cloud-arrow-up"></i> Actualizar datos
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@section('script')
<script>
    function establecimientoUpdate()
    {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const form = document.querySelector('#editEstablecimiento');
        const form_data = new FormData(document.querySelector('#editEstablecimiento'));

        form.addEventListener("submit", function (e) {
            e.preventDefault();

            axios.post('/establishments/{{ $establishment->id }}', form_data)
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