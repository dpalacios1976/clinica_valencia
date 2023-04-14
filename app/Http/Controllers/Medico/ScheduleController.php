<?php

namespace App\Http\Controllers\Medico;

use App\Http\Controllers\Controller;
use App\Http\Requests\ScheduleCreateRequest;
use App\Models\Doctor;
use App\Models\Schedule;
use App\Traits\ApiResponse;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    use ApiResponse;

    private $days = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];

    public function create(Doctor $doctor)
    {
        $days = $this->days;
        
        return view('medicos.horario.create', compact('doctor', 'days'));
    }

    public function store_horario($id, ScheduleCreateRequest $request)
    {
        try {

            $day = $request->active ?? [];
            $time_from = $request->horas_desde;
            $time_to = $request->horas_hasta;
            $morning_from = $request->morning_from;
            $morning_to = $request->morning_to;
            $afternoon_from = $request->afternoon_from;
            $afternoon_to = $request->afternoon_to;
            
            // \Debugbar::info($request->all());

            $errors = [];

            for ($i = 0; $i < 7; $i++) { 
                if ($time_from[$i] > $time_to[$i]) {
                   // dd($time_from[$i]);
                    dd($time_to[$i]);
                    
                    $errors[] = "La (Hora desde) no puede ser mayor a la (Hora hasta), del dia ".$this->days[$i].".";
                }
                if ($morning_from[$i] > $morning_to[$i]) {
                    $errors[] = "La (Hora desde) no puede ser mayor a la (Hora hasta), del dia ".$this->days[$i].", (Horario de la mañana).";
                }
                if ($afternoon_from[$i] > $afternoon_to[$i]) {
                    $errors[] = "La (Hora desde) no puede ser mayor a la (Hora hasta), del dia ".$this->days[$i].", (Horario de la tarde).";
                }
            }

            if (count($errors) > 0) {
                return $this->jsonErrorValidate("Inconveniente con las horas.", $errors);
            }
    
            for ($i = 0; $i < 7; $i++) 
            {
                Schedule::updateOrCreate(
                    ['day' => $i,'doctor_id' => $id],
                    [
                        'state' => in_array($i, $day),
                        'time_from' => $time_from[$i],
                        'time_to' => $time_to[$i],
                        'morning_from' => $morning_from[$i],
                        'morning_to' => $morning_to[$i],
                        'afternoon_from' => $afternoon_from[$i],
                        'afternoon_to' => $afternoon_to[$i],
                        'created_by' => auth()->id()
                    ]
                );
            }
            return $this->jsonSuccess("Horario guardado correctamente");

        } catch (\Throwable $th) {
            //throw $th;
            return $this->jsonFail("Inconvenient.", $th->getMessage());
            // return $this->jsonFail("Inconvenient", "Inconveniente al actualizar registro");
        }

        // return view('medicos.prueba');
    }

    public function edit(Doctor $doctor)
    {
        $days = $this->days;

        $schedules = Schedule::query()
            ->where('doctor_id', $doctor->id)
            ->select('day', 'time_from', 'time_to', 'morning_from', 'morning_to', 'afternoon_from', 'afternoon_to', 'state', 'doctor_id')
            ->orderBy('day', 'asc')
            ->get();

        $schedules->map(function ($schedules) {
            $schedules->time_from = (new Carbon($schedules->time_from))->format('G:i A');
            $schedules->time_to = (new Carbon($schedules->time_to))->format('G:i A');
            $schedules->morning_from = (new Carbon($schedules->morning_from))->format('G:i A');
            $schedules->morning_to = (new Carbon($schedules->morning_to))->format('G:i A');
            $schedules->afternoon_from = (new Carbon($schedules->afternoon_from))->format('G:i A');
            $schedules->afternoon_to = (new Carbon($schedules->afternoon_to))->format('G:i A');
        });

        return view('medicos.horario.edit', compact('doctor', 'days', 'schedules'));
    }
}
       