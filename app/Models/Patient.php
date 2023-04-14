<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'identificacion',
        'apellido_paterno',
        'apellido_materno',
        'primer_nombre',
        'segundo_nombre',
        'nombres',
        'foto',
        'direccion',
        'referencia_domicilio',
        'sexo',
        'telefono',
        'telefono2',
        'celular',
        'mail',
        'type_identification_id',
        'marital_status_id',
        'nationality_id',
        'lugar_nacimiento',
        'fecha_nacimiento',
        'country_id',
        'province_id',
        'city_id',
        'parish_id',
        'ethnicity_id',
        'education_formal_id',
        'insurance_id',
        'type_blood_id',
        'type_disability_id',
        'porcentaje_discapacidad',
        'llamar_a',
        'telefono_contacto',
        'direccion_contacto',
        'created_by',
        'state',
        'kinship_id',
        'patients_id'
    ];

    /**
     * Obtain identification associated with the patient
     * 
     * @return BelongsTo
     */
    public function tipo_documento(): BelongsTo
    {
        return $this->belongsTo(TypeIdentification::class, 'type_identification_id');
    }

    /**
     * Obtain marital status associated with the patient
     * 
     * @return BelongsTo
     */
    public function tipo_estado_civil(): BelongsTo
    {
        return $this->belongsTo(MaritalStatus::class, 'marital_status_id');
    }

    /**
     * Obtain insurance associated with the patient
     * 
     * @return BelongsTo
     */
    public function tipo_seguro(): BelongsTo
    {
        return $this->belongsTo(Insurance::class, 'insurance_id');
    }

    /**
     * Obtain type blood associated with the patient
     * 
     * @return BelongsTo
     */
    public function tipo_sangre(): BelongsTo
    {
        return $this->belongsTo(TypeBlood::class, 'type_blood_id');
    }

    /**
     * Obtain ethnicity associated with the patient
     * 
     * @return BelongsTo
     */
    public function etnia(): BelongsTo
    {
        return $this->belongsTo(Ethnicity::class, 'ethnicity_id');
    }

    /**
     * Obtain nationality associated with the patient
     * 
     * @return BelongsTo
     */
    public function nacionalidad(): BelongsTo
    {
        return $this->belongsTo(Nationality::class, 'nationality_id');
    }

    /**
     * Obtain province associated with the patient
     * 
     * @return BelongsTo
     */
    public function provincia(): BelongsTo
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    /**
     * Obtain city associated with the patient
     * 
     * @return BelongsTo
     */
    public function ciudad(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    /**
     * Obtain parish associated with the patient
     * 
     * @return BelongsTo
     */
    public function parroquia(): BelongsTo
    {
        return $this->belongsTo(Parish::class, 'parish_id');
    }

    /**
     * Obtain country associated with the patient
     * 
     * @return BelongsTo
     */
    public function pais(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    /**
     * Obtain disability associated with the patient
     * 
     * @return BelongsTo
     */
    public function discapacidad(): BelongsTo
    {
        return $this->belongsTo(TypeDisability::class, 'type_disability_id');
    }

    /**
     * Obtain education associated with the patient
     * 
     * @return BelongsTo
     */
    public function educacion(): BelongsTo
    {
        return $this->belongsTo(EducationFormal::class, 'education_formal_id');
    }

    /**
     * Get the agendas for the patient.
     */
    public function agendas()
    {
        return $this->hasMany(Agenda::class);
    }

    /**
     * Interact with the patient's age.
     *
     * @return  \Illuminate\Database\Eloquent\Casts\Attribute
     */
    // protected function fechaNacimiento(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => Carbon::parse($value)->age,
    //     );
    // }

    /**
     * Interact with the patient's gender.
     *
     * @return  \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function sexo(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ['F' => 'Femenino', 'M' => 'Masculino'][$value],
        );
    }

    public function scopeSexoM($query)
    {
        $query->where('sexo', 'M');
    }

    public function scopeSexoF($query)
    {
        $query->where('sexo', 'F');
    }
}
