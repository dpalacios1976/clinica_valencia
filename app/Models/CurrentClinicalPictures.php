<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentClinicalPictures extends Model
{
    use HasFactory;

    protected $fillable = [
        'observation',
        'medical_attention_id',
        'patients_id',
        'doctors_id',
        'msp_forms_id'
    ];
}
