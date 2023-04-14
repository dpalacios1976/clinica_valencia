<?php

namespace App\Http\Controllers\Paciente;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientCreateRequest;
use App\Http\Requests\PatientUpdateRequest;
use App\Models\Agenda;
use App\Models\City;
use App\Models\Country;
use App\Models\Doctor;
use App\Models\EducationFormal;
use App\Models\Ethnicity;
use App\Models\Insurance;
use App\Models\Kinship;
use App\Models\MaritalStatus;
use App\Models\Nationality;
use App\Models\Parish;
use App\Models\Patient;
use App\Models\Province;
use App\Models\Schedule;
use App\Models\Specialty;
use App\Models\TypeBlood;
use App\Models\TypeDisability;
use App\Models\TypeIdentification;
use App\Traits\ApiResponse;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

/**
 * PatientController
 * 
 * Class to manage patients
 * 
 * @author Byron
 */

class PatientController extends Controller
{
    use ApiResponse;

    public function index(Request $request) 
    {
        $search = $request->input('search');
        if ($request->has('search')) {
            $search = strtoupper($search);
        }

        $patients = Patient::with(['agendas' => function ($query) {
                $query->reservada();
            }])
            ->when($search, function ($query, $search) {
                $query->where('nombres', 'like', '%'.$search.'%')
                    ->orWhere('identificacion', 'like', '%'.$search.'%');
            })
            ->select('id', 'identificacion', 'apellido_paterno', 'nombres', 'foto', 'direccion', 'referencia_domicilio', 'sexo', 'telefono', 'telefono2', 'celular', 'mail', 
                'type_identification_id', 'marital_status_id', 'nationality_id', 'lugar_nacimiento', 'fecha_nacimiento', 'country_id', 'province_id', 'city_id', 'parish_id', 'ethnicity_id', 
                'education_formal_id', 'insurance_id', 'type_blood_id', 'type_disability_id', 'porcentaje_discapacidad', 'llamar_a', 'telefono_contacto', 'direccion_contacto', 'created_by', 
                'state')
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('pacientes.index', compact('patients'));
    }

    public function create() 
    {
        $type_identifications = TypeIdentification::query()
            ->activo()
            ->select('id', 'descripcion')
            ->get();

            

        $marital_statuses = MaritalStatus::query()
            ->select('id', 'descripcion')
            ->get();

        $nationalities  = Nationality::query()
            ->select('id', 'descripcion')
            ->get();

        $provinces = Province::query()
            ->select('id', 'descripcion')
            ->get();

        $type_bloods = TypeBlood::query()
            ->select('id', 'descripcion')
            ->get();

        $countries = Country::query()
            ->select('id', 'name')
            ->get();

        $ethnicities = Ethnicity::query()
            ->select('id', 'descripcion')
            ->get();
        
        $educations = EducationFormal::query()
            ->select('id', 'descripcion')
            ->get();

        $insurances = Insurance::query()
            ->select('id', 'descripcion')
            ->get();

        $educations = EducationFormal::query()
            ->select('id', 'descripcion')
            ->get();

        $type_disabilities = TypeDisability::query()
            ->select('id', 'descripcion')
            ->get();

        $kinships =Kinship::query()
            ->select('id','description')
            ->get();

        return view('pacientes.create', compact(
            'type_identifications', 'marital_statuses', 'nationalities', 'provinces', 'type_bloods', 'countries', 'ethnicities', 'educations', 'insurances', 'educations' , 'type_disabilities','kinships'
        ));
    }

    /**
     * cities
     * 
     * Function to search for cities belonging to a province ID.
     * 
     * @param int $id
     * @return JsonResponse
     */
    public function cities($id) 
    {
        $cities = City::query()
            ->activo()
            ->where('province_id', $id)
            ->select('id', 'descripcion')
            ->get();

        if ($cities->isEmpty()) {
            return $this->jsonFail("Inconvenient","No hay ciudades disponibles para la provincia seleccionada");
        } else {
            return $this->jsonSuccess('Ciudades', $cities->toArray());
        }
    }

    /**
     * parishes
     * 
     * Function to search for parishes that belong to the city ID.
     * 
     * @param int $id
     * @return JsonResponse
     */
    public function parishes($id) 
    {
        $parishes = Parish::query()
            ->activo()
            ->where('city_id', $id)
            ->select('id', 'descripcion')
            ->get();

        if ($parishes->isEmpty()) {
            return $this->jsonFail("Inconvenient","No hay parroquias disponibles para la ciudad seleccionada");
        } else {
            return $this->jsonSuccess('Parroquias', $parishes->toArray());
        }
    }

    public function show(Patient $patient)
    {
        return view('pacientes.show', compact('patient'));
    }

    public function store(PatientCreateRequest $request)
    {   
       

        $retorno = null;
        try {
        
                //$nombres_foto = strtoupper($request->pname.'-'.$request->sname.'-'.$request->papellido.'-'.$request->sapellido);

                $patient = new Patient();
                $patient->identificacion = $request->identificacion;
                $patient->apellido_paterno = strtoupper($request->papellido);
                $patient->apellido_materno = strtoupper($request->sapellido);
                $patient->primer_nombre = strtoupper($request->pname);
                $patient->segundo_nombre = strtoupper($request->sname);
                $patient->nombres = strtoupper($request->pname.' '.$request->sname.' '.$request->papellido.' '.$request->sapellido);
                $patient->direccion = ucfirst($request->direccion);
                $patient->referencia_domicilio = ucfirst($request->referencia);
                $patient->sexo = $request->genero;
                $patient->telefono = $request->telf;
                $patient->telefono2 = $request->telf2;
                $patient->celular = $request->celular;
                $patient->mail = $request->mail;
                $patient->type_identification_id = $request->type_ident;
                $patient->marital_status_id = $request->estado_civil;
                $patient->nationality_id = $request->nacionalidad;
                $patient->lugar_nacimiento = ucfirst($request->nacimiento);
                $patient->fecha_nacimiento = $request->fecha_nacimiento;
                $patient->country_id = $request->pais;
                $patient->province_id = $request->provincias;
                $patient->city_id = $request->ciudades;
                $patient->parish_id = $request->parroquias;
                $patient->ethnicity_id = $request->etnia;
                $patient->identity_gender_id = $request->identidad;
                $patient->education_formal_id = $request->educacion;
                $patient->insurance_id = $request->seguro;
                $patient->type_blood_id = $request->tipo_sangre;
                $patient->type_disability_id = $request->discapacidad;
            // $patient->porcentaje_discapacidad;
                $patient->llamar_a = strtoupper($request->llamar);
                $patient->telefono_contacto = $request->telf_cont;
                $patient->direccion_contacto = ucfirst($request->dir_cont);
                $patient->kinship_id=$request->kinship_id;
                $patient->created_by = auth()->id();

            // $patient->foto = $request->foto;
                $patient->save();
            // $notification = 'El paciente se creo correctamente.';
                //$retorno = $this->jsonCreated("Paciente creado correctamente");
                $retorno= $this->jsonSuccess("Paciente creado correctamente");
              
            } catch (\Throwable $th) {
                //throw $th;
                $retorno = $this->jsonFail("Inconvenient",$th->getMessage());
                // $retorno = $this->jsonFail("Inconvenient", "Inconveniente al guardar registro");
                dd($retorno);
            }
             return $retorno;

         //return redirect('/patients')->with(compact('notification'));
            
    }

    public function edit(Patient $patient)
    {
        
        $type_identifications = TypeIdentification::query()
            ->activo()
            ->select('id', 'descripcion')
            ->get();

        $marital_statuses = MaritalStatus::query()
            ->select('id', 'descripcion')
            ->get();

        $nationalities  = Nationality::query()
            ->select('id', 'descripcion')
            ->get();

        $provinces = Province::query()
            ->select('id', 'descripcion')
            ->get();

        $type_bloods = TypeBlood::query()
            ->select('id', 'descripcion')
            ->get();

        $countries = Country::query()
            ->select('id', 'name')
            ->get();

        $ethnicities = Ethnicity::query()
            ->select('id', 'descripcion')
            ->get();
        
        $educations = EducationFormal::query()
            ->select('id', 'descripcion')
            ->get();

        $insurances = Insurance::query()
            ->select('id', 'descripcion')
            ->get();

        $educations = EducationFormal::query()
            ->select('id', 'descripcion')
            ->get();

        $type_disabilities = TypeDisability::query()
            ->select('id', 'descripcion')
            ->get();

        $kinships =Kinship::query()
        ->select('id','description')
        ->get(); 
        return view('pacientes.edit', compact(
            'patient', 'type_identifications', 'marital_statuses', 'nationalities', 'provinces', 
            'type_bloods', 'countries', 'ethnicities', 'educations', 'insurances', 'educations' , 
            'type_disabilities','kinships'
        ));
    }

    public function update(Patient $patient, PatientUpdateRequest $request)
    {
        try {
            $nombres = strtoupper($request->pname.' '.$request->sname.' '.$request->papellido.' '.$request->sapellido);
            $nombres_foto = strtoupper($request->pname.'-'.$request->sname.'-'.$request->papellido.'-'.$request->sapellido);

            $patient->identificacion = $request->identification;
            $patient->apellido_paterno = strtoupper($request->papellido);
            $patient->apellido_materno = strtoupper($request->sapellido);
            $patient->primer_nombre = strtoupper($request->pname);
            $patient->segundo_nombre = strtoupper($request->sname);
            $patient->nombres = $nombres;
            $patient->direccion = ucfirst($request->direccion);
            $patient->referencia_domicilio = ucfirst($request->referencia);
            $patient->sexo = $request->genero;
            $patient->telefono = $request->telf;
            $patient->telefono2 = $request->telf2;
            $patient->celular = $request->celular;
            $patient->mail = $request->mail;
            $patient->type_identification_id = $request->type_ident;
            $patient->marital_status_id = $request->estado_civil;
            $patient->nationality_id = $request->nacionalidad;
            $patient->lugar_nacimiento = ucfirst($request->nacimiento);
            $patient->fecha_nacimiento = $request->fecha_nacimiento;
            $patient->country_id = $request->pais;
            $patient->province_id = $request->provincias;
            $patient->city_id = $request->ciudades;
            $patient->parish_id = $request->parroquias;
            $patient->ethnicity_id = $request->etnia;
            $patient->identity_gender_id = $request->identidad;
            $patient->education_formal_id = $request->educacion;
            $patient->insurance_id = $request->seguro;
            $patient->type_blood_id = $request->tipo_sangre;
            $patient->type_disability_id = $request->discapacidad;
            $patient->porcentaje_discapacidad;
            $patient->kinship_id=$request->kinship_id;
            if ($request->has('llamar')) {
                $patient->llamar_a = strtoupper($request->llamar);
            }
            $patient->telefono_contacto = $request->telf_cont;
            if ($request->has('dir_cont')) {
                $patient->direccion_contacto = ucfirst($request->dir_cont);
            }
            $patient->created_by = auth()->id();

            $data = [];
           
           
            if ($request->hasFile('foto')) 
            {
                if (Storage::disk('pacientes')->exists($patient->foto)) 
                {
                    Storage::disk('patients')->delete($patient->foto);
                    // \Debugbar::info('Imagen anterior borrada');
                }

                $foto = $request->file('foto');
                $extension = $foto->getClientOriginalExtension();
                $name_foto = date('Y-m-d_H:i').'-'.$nombres_foto.'.'.$extension;
                
                $almacenar = Storage::disk('patients')->put($name_foto, File::get($foto));

                if ($almacenar) {
                    $data['foto'] = "Imagen del paciente actualizada";
                    $patient->foto = $name_foto;
                } else {
                    $data['foto'] = "Inconveniente al actualizar imagen del paciente";
                }
            }

            $patient->save();

            return $this->jsonSuccess("Paciente actualizado correctamente", $data);
        } catch (\Throwable $th) {
            //throw $th;
            return $this->jsonFail("Inconvenient", $th->getMessage());
            // return $this->jsonFail("Inconvenient", "Inconveniente al actualizar registro");
        }
    }

    public function new_date(Patient $patient)
    {
        $specialities = Specialty::query()
            ->select('id', 'name')
            ->get();

        return view('pacientes.appointment.index', compact('patient', 'specialities'));
    }

    public function familiar(Patient $patient)
    {
        $specialities = Specialty::query()
            ->select('id', 'name')
            ->get();

        return view('pacientes.family.index', compact('patient', 'specialities'));
    }

    public function searchPatients(Request $request)
    {
        console.log('INGRESO');
        $search = $request->input('search');
        $search = strtoupper($search);

        $patients = Patient::query()
            ->where('nombres', 'like', '%'.$search.'%')
            ->activo()
            ->select('id', 'nombres')
            ->get();

        if ($patients->isEmpty()) 
        {
            return $this->jsonFail("Inconvenient","Sin coincidencias para el texto ingresado");
        } else {
            return $this->jsonSuccess('Conyuge', $patients->toArray());
        }
    }


    public function horas_disponibles(Request $request)
    {
        
        $fecha_ayer = Carbon::yesterday()->format('Y-m-d');
        $rules = [
            'fecha' => 'required|date|date_format:"Y-m-d"|after:'.$fecha_ayer,
            'doctor' => 'required|exists:doctors,id'
        ];


        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return $this->jsonErrorValidate("Faltan datos requeridos", $validator->errors());
        }
        
        $fecha = $request->fecha;
        $doctor_id  = $request->doctor;
        $doctor = Doctor::find($doctor_id);

        if ($doctor) {
            $horas = [];
            $carbonDate = new Carbon($fecha);
            $i = $carbonDate->dayOfWeek;

            $day = ($i === 0 ? 6 : $i-1);
            $horario = Schedule::query()
                ->where('state', true)
                ->where('day', $day)
                ->where('doctor_id', $doctor_id)
                ->first([
                    'time_from', 'time_to', 
                    'morning_from', 'morning_to', 
                    'afternoon_from', 'afternoon_to'
                ]);
                // ->get();

            if (!$horario) 
            {
                return $this->jsonFail("Horarios", "Medico no cuenta con horarios disponibles para el dia selecionado ");
            } else {
                $timeIntervalos =  $this->getIntervalos($fecha, $horario->time_from, $horario->time_to, $doctor->id, $doctor->consultation_time);
                $morningIntervalos =  $this->getIntervalos($fecha, $horario->morning_from, $horario->morning_to, $doctor->id, $doctor->consultation_time);
                $afternoonIntervalos =  $this->getIntervalos($fecha, $horario->afternoon_from, $horario->afternoon_to, $doctor->id, $doctor->consultation_time);
            }
            $data = [];
            $data['horarios'] = $timeIntervalos;
            $data['morning'] = $morningIntervalos;
            $data['afternoon'] = $afternoonIntervalos;

            return $this->jsonSuccess("Hoararios", $data);

        } else {
            return $this->jsonFail("Inconvenient", "Medico no encontrado.");
        }
    }
    /**
     * isAvailable
     * 
     * Searches for busy hours at the selected date and time
     * 
     * @param $fecha date
     * @param $doctor int
     * @param $start Carbon
     */
    private function isAvailable($fecha, $doctor, Carbon $start)
    {
        $horario_ocupado = Agenda::query()
            ->where('doctor_id', $doctor)
            ->where('fecha_cita', $fecha.' '.$start->format('H:i'))
            ->exists();

            return !$horario_ocupado;
    }

    private function getIntervalos($fecha, $start, $end, $doctor, $tiempo)
    {
        if ($start === null || $end === null || $start === $end) 
        {
            $horarios_disponibles = [];
        } else {
            $start = new Carbon($start);
            $end = new Carbon($end);
    
            $horarios_disponibles = [];
            // $tiempo_consulta = $tiempo-1;
            while($start < $end)
            {
                $horarios_disponible = [];
                $horarios_disponible['start'] = $start->format('g:i A');
    
                $available = $this->isAvailable($fecha, $doctor, $start);
    
                $start->addMinutes($tiempo);
                $horarios_disponible['end'] = $start->format('g:i A');
    
                if ($available) 
                {
                    $horarios_disponibles[] = $horarios_disponible;
                }
            }
        }
        
        return $horarios_disponibles;
    }

    public function store_date(Request $request) 
    {
        try {
            $fecha_ayer = Carbon::yesterday()->format('Y-m-d');
            $rules = [
                'fecha' => 'required|date|date_format:"Y-m-d"|after:'.$fecha_ayer,
                'doctor' => 'required|exists:doctors,id',
                'paciente' => 'required|exists:patients,id',
                'speciality' => 'required',
                'horarios' => 'required',
                'motivo' => 'required',
            ];
    
            $validator = Validator::make($request->all(), $rules);

            $validator->after(function ($validator) use ($request) {

                $fecha = $request->fecha;
                $doctor = $request->doctor;
                $horario = $request->horarios;
                if ($fecha && $doctor && $horario) {
                    $start = new Carbon($horario);
                } else {
                    return;
                }
                
                if (!$this->isAvailable($fecha, $doctor, $start)) {
                    $validator->errors()->add(
                        'hora', 'La hora seleccionada ya se encuentra reservada.'
                    );
                }
            });
    
            if ($validator->fails()) {
                return $this->jsonErrorValidate("Faltan datos requeridos", $validator->errors());
            }

            DB::beginTransaction();
            $hora = Carbon::createFromFormat('g:i A', $request->horarios);
            $hora_format = $hora->format('H:i');
            $fecha_cita = $request->fecha.' '.$hora_format;
            
            $agenda = new Agenda();
            $agenda->fecha_cita = $fecha_cita;
            $agenda->motivo = $request->motivo;
            $agenda->patient_id = $request->paciente;
            $agenda->doctor_id = $request->doctor;
            $agenda->user_id = auth()->id();

            $agenda->save();
            DB::commit();

            return $this->jsonSuccess("Cita creada correctamente");
        } catch (\Throwable $th) {
            return $this->jsonFail("Inconvenient", $th->getMessage());
            // return $this->jsonFail("Inconvenient", "Inconveniente al actualizar registro");
        }

    }

   
}
