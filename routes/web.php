<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EstablishmentController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\Medico\AgendaController;
use App\Http\Controllers\Medico\DoctorController;
use App\Http\Controllers\Medico\ScheduleController;
use App\Http\Controllers\Paciente\PatientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicalHistory\AtencionMedicaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

Route::middleware(['auth'])->group( function () {
    // Logout - Cerrar Sesion 
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    
    // Dashboard (Home - Pagina de inicio)
    Route::get('home', [DashboardController::class, 'index'])->name('home');
    
    // USERS and ROLES
    Route::middleware('can:management')->group(function () {
        Route::get('management', [UserController::class, 'index_admin'])->name('management');
    });

    Route::resource('management/users', UserController::class)->except('destroy')->names('admin.users');
    Route::post('management/userspass/{user}', [UserController::class, 'updatePass'])->name('admin.users.updatepass');
    Route::post('management/users/inactive/{user}', [UserController::class, 'userInactive'])->name('admin.users.inactive');
    Route::post('management/users/active/{user}', [UserController::class, 'userActive'])->name('admin.users.active');
    Route::post('management/users/doctors', [UserController::class, 'searchDoctors'])->name('admin.users.doctors');
    
    // MEDICOS
    Route::resource('doctors', DoctorController::class)->except('destroy')->names('doctors');
    Route::post('doctors/inactive/{doctor}', [DoctorController::class, 'medicoInactive'])->name('doctors.inactive');
    Route::post('doctors/active/{doctor}', [DoctorController::class, 'medicoActive'])->name('doctors.active');

    // MEEDICOS - HORARIOS
    Route::get('doctors/schedule/{doctor}', [ScheduleController::class, 'create'])->name('doctors.schedules');
    Route::post('doctor/schedule/store/{id}', [ScheduleController::class, 'store_horario'])->name('doctors.schedules.store');
    Route::get('doctors/schedule/edit/{doctor}', [ScheduleController::class, 'edit'])->name('doctors.schedules.edit');

    // MEDICOS - AGENDA
    // Route::get('schedules', [AgendaController::class, 'index'])->name('schedules');
    Route::post('schedules/doctors/{id}', [AgendaController::class, 'doctors'])->name('schedules.doctors');
    
    Route::resource('agendas', AgendaController::class)->except('destroy')->names('agendas');
    Route::post('agendas/cancelar/{agenda}', [AgendaController::class, 'agendaCancelar'])->name('agendas.cancelar');
    Route::post('agendas/noasistio/{agenda}', [AgendaController::class, 'agendaNoasistio'])->name('agendas.noasistio');

    // ESTABLECIMIENTOS
    Route::resource('establishments', EstablishmentController::class)->except('destroy')->names('establishments');
    Route::post('establishments/inactive/{establishment}', [EstablishmentController::class, 'establishmentInactive'])->name('establishments.inactive');
    Route::post('establishments/active/{establishment}', [EstablishmentController::class, 'establishmentActive'])->name('establishments.active');

    // PACIENTES
    Route::resource('patients', PatientController::class)->except('destroy')->names('patients');
    Route::post('patients/cities/{id}', [PatientController::class, 'cities'])->name('patients.cities');
    Route::post('patients/parishes/{id}', [PatientController::class, 'parishes'])->name('patients.parishes');
    Route::get('patients/date/{patient}', [PatientController::class, 'new_date'])->name('patients.date');
    Route::get('patients/familiar/{patient}', [PatientController::class, 'familiar'])->name('patients.familiar');
    Route::post('patients/parientes/conyuge', [PatientController::class, 'searchPatients'])->name('patients.parientes.conyuge');
    Route::post('patients/date/horas_disponibles', [PatientController::class, 'horas_disponibles'])->name('patients.date.horas');
    Route::post('patients/date', [PatientController::class, 'store_date'])->name('patients.date.store');
    
    //ACTUALIZAR CONYUGE
    // Route::resource('relatives',FamilyController::class)->except('destroy')->names('relatives.edit');
    
   
    // HISTORIA CLINICA
    Route::resource('attentions', AtencionMedicaController::class)->parameters(['attentions'=>'patient'])->except('destroy')->names('attentions');


    // Route::get('patients/agenda/{patient}', [PatientController::class, 'citas_pacientes'])->name('patients.date');
    

    // Route::get('dashboard', [LoginController::class, 'dashboard'])->name('home');
    // Route::get('/home', function () {
    //     return view('welcome');
    // })->name('home');

});

// Route::get('/post/create', function () {
//     return view('login');
// });
