<?php

namespace App\Http\Controllers\MedicalHistory;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MedicalAttention;
use App\Models\Patient;
use App\Models\TypeIdentification;
use App\Models\MaritalStatus;
use App\Models\Nationality;
use App\Models\Province;
use App\Models\TypeBlood;
use App\Models\Country;
use App\Models\Ethnicity;
use App\Models\Insurance;
use App\Models\TypeDisability;



class AtencionMedicaController extends Controller
{
    
    //
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
                $query->where('apellido_paterno', 'like', '%'.$search.'%')
                    ->orWhere('identificacion', 'like', $search);
            })
            ->select('id', 'identificacion', 'apellido_paterno', 'nombres', 'foto', 'direccion', 'referencia_domicilio', 'sexo', 'telefono', 'telefono2', 'celular', 'mail', 
                'type_identification_id', 'marital_status_id', 'nationality_id', 'lugar_nacimiento', 'fecha_nacimiento', 'country_id', 'province_id', 'city_id', 'parish_id', 'ethnicity_id', 
                'education_formal_id', 'insurance_id', 'type_blood_id', 'type_disability_id', 'porcentaje_discapacidad', 'llamar_a', 'telefono_contacto', 'direccion_contacto', 'created_by', 
                'state')
            ->orderBy('apellido_paterno', 'asc')
            ->paginate(10);


        return view('medicalhistory.index', compact('patients'));
    }

    public function edit(Patient $patient)
    {
      
      
        $marital_statuses = MaritalStatus::query()
            ->select('id', 'descripcion')
            ->get();
            
        $nationalities  = Nationality::query()
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
            
     
        $insurances = Insurance::query()
            ->select('id', 'descripcion')
            ->get();

         

        $type_disabilities = TypeDisability::query()
            ->select('id', 'descripcion')
            ->get();
         
        return view('medicalhistory.edit', compact(
            'patient', 'marital_statuses', 'nationalities',  
            'type_bloods', 'countries', 'ethnicities', 'insurances',  
            'type_disabilities'
        ));
    }
    
}
