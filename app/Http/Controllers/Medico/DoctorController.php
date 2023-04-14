<?php

namespace App\Http\Controllers\Medico;

use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorCreateRequest;
use App\Http\Requests\DoctorUpdateRequest;
use App\Models\Doctor;
use App\Models\Schedule;
use App\Models\Specialty;
use App\Traits\ApiResponse;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

/**
 * DoctorController
 * 
 * Class to manage doctor's
 * 
 * @author Byron
 */
class DoctorController extends Controller
{
    use ApiResponse;

    public function index(Request $request)
    {
        $search = $request->input('search');
        if ($request->has('search')) {
            $search = strtoupper($search);
        }

        $speciality = $request->input('speciality');

        $doctors = Doctor::with('specialties')
            ->when($speciality, function ($query) use ($speciality) {
                $query->whereHas('specialties', function (Builder $query) use ($speciality) {
                    $query->where('specialties.id', $speciality);
                });
            })
            // ->with(['specialties' => function($query) use ($speciality) {
            //     $query->when($speciality, function($query) use ($speciality) {
            //         $query->where('specialties.id', $speciality);
            //     });
            // }])
            ->when($search, function ($query, $search) {
                $query->where('names', 'like', '%'.$search.'%')
                    ->orWhere('ruc', 'like', $search);
            })
            ->select('id', 'ruc', 'names', 'mobile', 'email', 'state', 'created_at')
            ->orderBy('names', 'asc')
            ->paginate(10);
            //->get();

        $especialidades = Specialty::query()
            ->select('id', 'name')
            ->get();

        return view('medicos.index', compact('doctors', 'especialidades'));
    }

    public function create() 
    {
        $specialities = Specialty::active()
            ->select('id', 'name')
            ->get();

        return view('medicos.create', compact('specialities'));
    }

    public function show(Doctor $doctor)
    {
        return view('medicos.show', compact('doctor'));
    }

    public function store(DoctorCreateRequest $request)
    {
        $retorno = null;
        try {
            $doctor = new Doctor();
            $doctor->ruc = $request->cedula;
            $doctor->names = strtoupper($request->fullname);
            $doctor->address = $request->direccion;
            $doctor->senecyt_code = $request->code_senecyt;
            $doctor->mobile = $request->mobile;
            $doctor->mobile2 = $request->telf;
            $doctor->email = $request->mail;
            $doctor->consultation_time = $request->time_consul;
            
            $doctor->save();

            $doctor->specialties()->sync($request->specialities);

            $retorno = $this->jsonCreated("Medico creado correctamente");

        } catch (\Throwable $th) {
            //throw $th;
            $retorno = $this->jsonFail("Inconvenient",$th->getMessage());
            // $retorno = $this->jsonFail("Inconvenient", "Inconveniente al guardar registro");
        }
        return $retorno;
    }

    public function edit(Doctor $doctor)
    {
        $specialities = Specialty::active()
            ->select('id', 'name')
            ->get();

        return view('medicos.edit', compact('doctor', 'specialities'));
    }

    public function update(Doctor $doctor, DoctorUpdateRequest $request)
    {
        try {
            $doctor->ruc = $request->cedula;
            $doctor->names = $request->fullname;
            $doctor->address = $request->direccion;
            $doctor->senecyt_code = $request->code_senecyt;
            $doctor->mobile = $request->mobile;
            $doctor->mobile2 = $request->telf;
            $doctor->email = $request->mail;

            $doctor->save();

            if ($request->has('specialities')) {
                $doctor->specialties()->sync($request->specialities);
            }

            return $this->jsonSuccess("Medico actualizado correctamente");
        } catch (\Throwable $th) {
            //throw $th;
            return $this->jsonFail("Inconvenient", $th->getMessage());
            // return $this->jsonFail("Inconvenient", "Inconveniente al actualizar registro");
        }
    }

    public function medicoInactive(Doctor $doctor)
    {
        try {
            $doctor->state = 0;
            $doctor->save();

            return $this->jsonSuccess("Medico desactivado correctamente");
        } catch (\Throwable $th) {
            //throw $th;
            return $this->jsonFail("Inconvenient", $th->getMessage());
            // return $this->jsonFail("Inconvenient", "Inconveniente al actualizar registro");
        }
    }

    public function medicoActive(Doctor $doctor)
    {
        try {
            $doctor->state = 1;
            $doctor->save();

            return $this->jsonSuccess("Medico activado correctamente");
        } catch (\Throwable $th) {
            //throw $th;
            // return $this->jsonFail("Inconvenient", $th->getMessage());
            return $this->jsonFail("Inconvenient", "Inconveniente al actualizar registro");
        }
    }


}
