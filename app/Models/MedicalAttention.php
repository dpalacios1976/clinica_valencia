<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class MedicalAttention extends Model
{
    use HasFactory;
    protected $table ='medical_attention';
    protected $fillable = [
        'end_date',
        'type_medical_care_id',
        'doctors_id',
        'user_id',
        'establishments_id',
        'patients_id',
        'care_status_id',
        'specialities_id',
    ];

    /* Obtiene el tipo de atención médica */
    public function tipo_atencion_medica(): BelongsTo {
        return $this->belongsTo(type_medical_cares::class,'type_medical_care_id');
    }

    /*Obtiene el médico*/
    public function medico(): BelongsTo {
        return $this->belongsTo(doctors::class,'doctors_id');
    }

    /*Obtiene el usuario */
    public function usuario(): BelongsTo {
        return $this->belongsTo(users::class,'user_id');
    }

    /** Obtiene el establecimiento */
    public function establecimiento(): BelongsTo {
        return $this->belongsTo(establishments::class,'establishments_id');
    }

    /**Obtiene el paciente */
    public function paciente(): BelongsTo {
        return $this->belongsTo(patients::class,'patients_id');
    }

    /**Obtiene el estado de atención médica */
    public function estado_atencion(): BelongsTo {
        return $this->belongsTo(care_statuses::class,'care_status_id');
    }

    /**Obtiene la especialidad */
    public function especialidad(): BelongsTo {
        return $this->belongsTo(specialties::class,'specialities_id');
    }

}
