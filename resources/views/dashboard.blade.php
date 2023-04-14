@extends('templates.master')
@section('title', 'Dasboard')
@section('title-module', 'Dashboard')

@section('content')
    <div class="cards">
        <div class="card-1">
            <div>
                <i class="fa-solid fa-calendar-plus"></i>
            </div>
            <div class="text-card-info">
                <span class="number">{{ $agendas ?? 0 }}</span>
                <span>Citas para hoy</span>
            </div>
        </div>
        <div class="card-2">
            <div>
                <i class="fa-solid fa-calendar-days"></i>
            </div>
            <div class="text-card-info">
                <span class="number">{{ $doctors ?? 0 }}</span>
                <span>Medicos</span>
            </div>
        </div>
        <div class="card-3">
            <div>
                <i class="fa-solid fa-users-line"></i>
            </div>
            <div class="text-card-info">
                <span class="number">{{ $patients ?? 0 }}</span>
                <span>Pacientes</span>
            </div>
        </div>
    </div>

    <h2 style="padding: 0.5rem 0 0.5rem 1rem">Informacion de ultimos regitros</h2>
    
    <div class="content-table">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>User</th>
                    <th>Estado</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->active }}</td>
                        @php
                            $difdate = $user->created_at->diffInDays();
                            $showDiff = $user->created_at->diffForHumans();
                            $show_hours = $user->created_at->addDays($difdate)->diffInHours().' horas';
                        @endphp
                        <td>{{ $showDiff }} </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Sin registros </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Paciente</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($patients_list as $patient)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $patient->nombres }}</td>
                        @php
                            $showDiff = $patient->created_at->diffForHumans();
                        @endphp
                        <td>{{ $showDiff }} </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Sin registros </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        
    </div>
@endsection
