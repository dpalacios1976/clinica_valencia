<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyBackground extends Model
{
    use HasFactory;
    protected $fillable = [
        'observation',
        'medical_attention_id',
        'clinical_data_id',
        'patients_id',
        'doctors_id',
        'kinship_id'
    ];
}
