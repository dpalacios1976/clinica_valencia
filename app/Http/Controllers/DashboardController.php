<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use Carbon\Carbon;
use DebugBar\DebugBar;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Displays the dashboard
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $data['users'] = User::activo()->get();
        $data['patients_list'] = Patient::query()
            ->select('nombres', 'created_at')
            ->get();

        $data['agendas'] = Agenda::query()
            ->reservada()
            ->whereDate('fecha_cita', Carbon::now()->toDateString())
            ->count();

        $data['doctors'] = Doctor::query()
            ->activo()
            ->select('names')
            ->count();

        $data['patients'] = Patient::query()
            ->select('nombres')
            ->count();

        // \Debugbar::info($data['doctors']);

        return view('dashboard', $data);
    }
}
