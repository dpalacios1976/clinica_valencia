<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.

use App\Models\Doctor;
use App\Models\Establishment;
use App\Models\Patient;
use App\Models\User;
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Management USERS AND ROLES
Breadcrumbs::for('management', function (BreadcrumbTrail $trail) {
    $trail->push('Gestion de usuarios', route('management'));
});

// Index List Users
Breadcrumbs::for('user_index', function (BreadcrumbTrail $trail) {
    $trail->parent('management');
    $trail->push('Listado de usuarios', route('admin.users.index'));
});
// Index users > show user
Breadcrumbs::for('user_show', function (BreadcrumbTrail $trail, User $user) {
    $trail->parent('user_index');
    $trail->push($user->name, route('admin.users.show', $user));
});
// Index users > create user
Breadcrumbs::for('user_create', function (BreadcrumbTrail $trail) {
    $trail->parent('user_index');
    $trail->push('Nuevo usuario', route('admin.users.create'));
});

// Index users > edit user
Breadcrumbs::for('user_edit', function (BreadcrumbTrail $trail, User $user) {
    $trail->parent('user_index');
    $trail->push($user->name, route('admin.users.edit', $user));
});

// Management Doctors
Breadcrumbs::for('doctors_index', function (BreadcrumbTrail $trail) {
    $trail->push('Gestion de medicos', route('doctors.index'));
});

Breadcrumbs::for('doctor_create', function (BreadcrumbTrail $trail) {
    $trail->parent('doctors_index');
    $trail->push('Nuevo medico', route('doctors.create'));
});

Breadcrumbs::for('doctor_edit', function (BreadcrumbTrail $trail, Doctor $doctor) {
    $trail->parent('doctors_index');
    $trail->push($doctor->names, route('doctors.edit', $doctor));
});

Breadcrumbs::for('doctor_show', function (BreadcrumbTrail $trail, Doctor $doctor) {
    $trail->parent('doctors_index');
    $trail->push($doctor->names, route('doctors.show', $doctor));
});

Breadcrumbs::for('doctor_horario', function (BreadcrumbTrail $trail, Doctor $doctor) {
    $trail->parent('doctors_index');
    $trail->push($doctor->names, route('doctors.schedules', $doctor));
});

// PARAMETERS
Breadcrumbs::for('establishment_index', function (BreadcrumbTrail $trail) {
    $trail->push('Establecimiento', route('establishments.index'));
});
Breadcrumbs::for('establishment_create', function (BreadcrumbTrail $trail) {
    $trail->parent('establishment_index');
    $trail->push('Nuevo establecimiento', route('establishments.create'));
});

Breadcrumbs::for('establishment_show', function (BreadcrumbTrail $trail, Establishment $establishment) {
    $trail->parent('establishment_index');
    $trail->push($establishment->nombre_comercial, route('establishments.show', $establishment));
});
Breadcrumbs::for('establishment_edit', function (BreadcrumbTrail $trail, Establishment $establishment) {
    $trail->parent('establishment_index');
    $trail->push($establishment->nombre_comercial, route('establishments.edit', $establishment));
});

// PATIENTS
Breadcrumbs::for('patients_index', function (BreadcrumbTrail $trail) {
    $trail->push('Admision pacientes', route('patients.index'));
});

Breadcrumbs::for('patients_create', function (BreadcrumbTrail $trail) {
    $trail->parent('patients_index');
    $trail->push('Nuevo paciente', route('patients.create'));
});

Breadcrumbs::for('patients_show', function (BreadcrumbTrail $trail, Patient $patient) {
    $trail->parent('patients_index');
    $trail->push($patient->nombres, route('patients.show', $patient));
});

Breadcrumbs::for('patients_edit', function (BreadcrumbTrail $trail, Patient $patient) {
    $trail->parent('patients_index');
    $trail->push($patient->nombres, route('patients.edit', $patient));
});

Breadcrumbs::for('patients_familiar', function (BreadcrumbTrail $trail, Patient $patient) {
    $trail->parent('patients_index');
    $trail->push($patient->nombres, route('relatives.edit', $patient));
});

Breadcrumbs::for('patients_date', function (BreadcrumbTrail $trail, Patient $patient) {
    $trail->parent('patients_index');
    $trail->push($patient->nombres, route('patients.date', $patient));
});

// AGENDAS
Breadcrumbs::for('agendas_index', function (BreadcrumbTrail $trail) {
    $trail->push('Gestion agenda', route('agendas.index'));
});

// HISTORIA CLINICA
Breadcrumbs::for('historia_index', function (BreadcrumbTrail $trail) {
    $trail->push('Atencion Medica', route('attentions.index'));
});

Breadcrumbs::for('atenciomedica', function (BreadcrumbTrail $trail, Patient $patient) {
    $trail->parent('historia_index');
    $trail->push($patient->nombres, route('attentions.edit', $patient));
});


/*
// Home > Blog > [Category]
Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category));
}); */