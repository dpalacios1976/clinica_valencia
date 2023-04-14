@extends('templates.master')
@section('title', 'Agenda')
@section('title-module', 'Agenda')

@section('content')

    {{-- Breadcrumbs::render('doctors_index') --}}
    
    <div class="row">
        <div id="calendar"></div>
    </div>

    <!-- Vertically centered scrollable modal -->
    <div class="modal fade" id="agendaModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agendar nueva cita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-4">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Especialidades</span>
                                <select name="speciality" id="speciality" class="form-control">
                                    <option value=""> --- Seleccione ---</option>
                                    @forelse ($specialities as $especialidad)
                                        <option value="{{ $especialidad->id }}">{{ $especialidad->name }}</option>
                                    @empty
                                        <option value=""> --- Seleccione ---</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>

                        <div class="col-md-5 col-sm-4">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Medicos</span>
                                <select name="doctor" id="doctor" class="form-control" readonly></select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-success">Guardar cita</button>
                </div>
              </div>
            
        </div>
    </div>
        
@endsection

@section('script')
<script src="{{ asset('js/appointments.js') }}" defer></script>
@endsection