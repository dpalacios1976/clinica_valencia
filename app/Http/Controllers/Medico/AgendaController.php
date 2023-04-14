<?php

namespace App\Http\Controllers\Medico;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Doctor;
use App\Models\Specialty;
use App\Traits\ApiResponse;
use Carbon\Carbon;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    use ApiResponse;

    // public function index(Request $request)
    // {
    //     $search = $request->input('search');
    //     $search = strtoupper($search);

    //     $speciality = $request->input('speciality');

    //     $doctors = Doctor::query()
    //         ->with('specialties')
    //         ->when($speciality, function ($query) use ($speciality) {
    //             $query->whereHas('specialties', function (Builder $query) use ($speciality) {
    //                 $query->where('specialties.id', $speciality);
    //             });
    //         })
    //         // ->with(['specialties' => function($query) use ($speciality) {
    //         //     $query->when($speciality, function($query) use ($speciality) {
    //         //         $query->where('specialties.id', $speciality);
    //         //     });
    //         // }])
    //         ->when($search, function ($query, $search) {
    //             $query->where('names', 'like', '%'.$search.'%')
    //                 ->orWhere('ruc', 'like', $search);
    //         })
    //         ->select('id', 'ruc', 'names', 'mobile', 'email', 'state', 'created_at')
    //         ->orderBy('names', 'asc')
    //         ->paginate(10);
    //         //->get();

    //     $specialities = Specialty::query()
    //         ->select('id', 'name')
    //         ->get();

    //     return view('agenda.index', compact('doctors', 'specialities'));
    // }

    public function index(Request $request)
    {
        // if ($request->has('search')) {
            $search = $request->input('search');
        // }

        $doctors = Doctor::query()
            ->activo()
            ->get();

        $agendas = Agenda::query()
            ->when($search, function ($query, $search) {
                $query->where('doctor_id', $search);
            })
            ->where('fecha_cita', '>=', Carbon::now()->subDays(30)->toDateTimeString())
            ->select('id', 'fecha_cita', 'motivo', 'state', 'patient_id', 'doctor_id', 'user_id', 'created_at')
            ->orderBy('fecha_cita', 'asc')
            ->paginate(20);
            // ->get();


        return view('agenda.index_agenda', compact('doctors', 'agendas'));
    }

    public function doctors($id) 
    {
        $doctors = Doctor::whereHas('specialties', function (Builder $query) use ($id) {
                $query->where('specialties.id', $id);
            })
            ->activo()
            ->select('id', 'names')
            ->get();

        if ($doctors->isEmpty()) {
            return $this->jsonFail("Inconvenient","Sin medicos para la especialidad seleccionada");
        } else {

            return $this->jsonSuccess('Medicos', $doctors);
        }

    }

    public function agendaCancelar(Agenda $agenda)
    {
        try {
            $agenda->state = 0;
            $agenda->save();

            return $this->jsonSuccess("Estado de cita actualizado a: Cancelada");

        } catch (\Throwable $th) {
            return $this->jsonFail("Inconvenient", $th->getMessage());
            // return $this->jsonFail("Inconvenient", "Inconveniente al actualizar registro");
        }
    }

    public function agendaNoasistio(Agenda $agenda)
    {
        try {
            $agenda->state = 3;
            $agenda->save();

            return $this->jsonSuccess("Estado de cita actualizado a: No asistio");
        } catch (\Throwable $th) {
            return $this->jsonFail("Inconvenient", $th->getMessage());
            // return $this->jsonFail("Inconvenient", "Inconveniente al actualizar registro");
        }
    }
}
