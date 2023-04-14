@extends('templates.master')
@section('title', 'Medicos')
@section('title-module', 'Medicos')

@section('content')

    {{ Breadcrumbs::render('doctor_horario', $doctor) }}

    <div>
        <h4 class="text-center">Nuevo horario medico</h4> 
        <Label>Recomendaciones: </Label>
        <ul>
            <li>Tratar de seleccionar un solo tipo de horario</li>
            <li>Primero activar el dia de la semana y luego seleccionar las horas</li>
            <li>Ejemplo de horario tipo <span style="font-weight: 800">UN HORARIO: </span> 07:00 am - 17:00 pm</li>
            <li>Ejemplo de horario tipo <span style="font-weight: 800">HORARIO EN 2 PARTES: </span> 07:00 am a 12:00 pm - 14:00 pm a 17:00 pm</li>
            <li>
                Al seleccionar el rango de horas del horario tener en cuenta el tiempo de consulta del medico: 
                (<span style="font-weight: 800">{{ $doctor->consultation_time }} min</span>)
            </li>
        </ul>
    </div>
    
    <div class="table-responsive-md">
        <form id="addSchedule" action="{{ route('doctors.schedules.store', $doctor->id) }}" method="post">
            @csrf
            <table class="table table-hover table-bordered" style="z-index: 1;">
                <thead>
                    <tr>
                        <th colspan="2"></th>
                        <th colspan="2" style="text-align: center;">UN HORARIO</th>
                        <th colspan="4" style="text-align: center;">HORARIO EN 2 PARTES</th>
                    </tr>
                    <tr>
                        <th rowspan="2" style="text-align: center; vertical-align: middle;">DIA</th>
                        <th rowspan="2" style="text-align: center; vertical-align: middle;">ESTADO</th>
                        <th colspan="2" style="text-align: center;">HORARIO</th>
                        <th colspan="2" style="text-align: center;">HORARIO MAÑANA</th>
                        <th colspan="2" style="text-align: center;">HORARIO TARDE</th>
                    </tr>
                    <tr>
                        <th style="text-align: center;">Desde</th>
                        <th style="text-align: center;">Hasta</th>
                        <th style="text-align: center;">Desde</th>
                        <th style="text-align: center;">Hasta</th>
                        <th style="text-align: center;">Desde</th>
                        <th style="text-align: center;">Hasta</th>
                    </tr>
                </thead>
                <tbody>
    
                    @forelse ($days as $key => $day)
                        <tr>
                            <td>{{ $day }}</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="active[]" value="{{ $key }}">
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="row">
                                    <div class="col">
                                        <select name="horas_desde[]" id="hd{{ $key }}" class="form-control">
                                            <option value="">seleccione</option>
                                            @for ($i=1; $i<=24; $i++)
                                                @php
                                                    $hour = $i <= 9 ? '0'.$i.'00' : $i.'00';
                                                    $hour_to = $i <= 9 ? '0'.$i.'30' : $i.'30';
                                                    $date = new DateTime($hour);
                                                    $n_date = $date->format('H:i A');
                                                    $date_to = new DateTime($hour_to);
                                                    $n_date_to = $date_to->format('H:i A');
                                                @endphp
                                                <option value="{{ $i <= 9 ? '0'.$i.'00' : $i.'00' }}">{{ $n_date }} </option>
                                                @break($i == 24)
                                                <option value="{{ $i <= 9 ? '0'.$i.'30' : $i.'30' }}">{{ $n_date_to }} </option>
                                                {{-- <option value="{{ $i <= 9 ? '0'.$i : $i }}:30">{{ $i <= 9 ? '0'.$i : $i }}:30 {{ $i < 12 ? 'AM' : 'PM'  }} </option> --}}
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select name="horas_hasta[]" id="hh{{ $key }}" class="form-control">
                                            <option value="">seleccione</option>
                                            @for ($i=0; $i<24; $i++)
                                                <option value="{{ $i <= 9 ? '0'.$i.'00' : $i.'00' }}">{{ $i <= 9 ? '0'.$i : $i }}:00 {{ $i < 12 ? 'AM' : 'PM'  }} </option>
                                                @break($i == 24)
                                                <option value="{{ $i <= 9 ? '0'.$i.'30' : $i.'30' }}">{{ $i <= 9 ? '0'.$i : $i }}:30 {{ $i < 12 ? 'AM' : 'PM'  }} </option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="row">
                                    <div class="col">
                                        <select name="morning_from[]" id="mf{{ $key }}" class="form-control">
                                            <option value="">seleccione</option>
                                            @for ($i=0; $i<=12; $i++)
                                                <option value="{{ $i <= 9 ? '0'.$i.'00' : $i.'00' }}">{{ $i <= 9 ? '0'.$i : $i }}:00 {{ $i == 12 ? 'PM' : 'AM' }} </option>
                                                @break($i == 12)
                                                <option value="{{ $i <= 9 ? '0'.$i.'30' : $i.'30' }}">{{ $i <= 9 ? '0'.$i : $i }}:30 AM </option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select name="morning_to[]" id="mt{{ $key }}" class="form-control">
                                            <option value="">seleccione</option>
                                            @for ($i=0; $i<=12; $i++)
                                                <option value="{{ $i <= 9 ? '0'.$i.'00' : $i.'00' }}">{{ $i <= 9 ? '0'.$i : $i }}:00 {{ $i == 12 ? 'PM' : 'AM' }} </option>
                                                @break($i == 12)
                                                <option value="{{ $i <= 9 ? '0'.$i.'30' : $i.'30' }}">{{ $i <= 9 ? '0'.$i : $i }}:30 AM </option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="row">
                                    <div class="col">
                                        <select name="afternoon_from[]" id="af{{ $key }}" class="form-control">
                                            <option value="">seleccione</option>
                                            @for ($i=12; $i<24; $i++)
                                                <option value="{{ $i }}:00">{{ $i }}:00 PM </option>
                                                @break($i == 24)
                                                <option value="{{ $i }}:30">{{ $i }}:30 PM </option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select name="afternoon_to[]" id="at{{ $key }}" class="form-control">
                                            <option value="">seleccione</option>
                                            @for ($i=12; $i<24; $i++)
                                                <option value="{{ $i }}:00">{{ $i }}:00 PM </option>
                                                @break($i == 24)
                                                <option value="{{ $i }}:30">{{ $i }}:30 PM </option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" style="text-align: center;">Sin registros de horarios </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="row">
                <div class="d-grid col-3 mx-auto mt-2">
                    <button type="submit" class="btn btn-success" onclick="scheduleStore({{ $doctor->id }})">
                        <i class="fa-solid fa-cloud-arrow-up"></i> Guardar horario
                    </button>
                </div>
            </div>
        </form>
    </div>
        
@endsection

@section('script')

    <script src="{{ asset('js/schedules.js') }}" defer></script>

@endsection