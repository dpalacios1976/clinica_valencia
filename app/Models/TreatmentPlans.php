<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreatmentPlans extends Model
{
    use HasFactory;
    protected $fillable = [
        'observation',
        'medical_attention_id',
        'patients_id',
        'doctors_id'
    ];
    
}
