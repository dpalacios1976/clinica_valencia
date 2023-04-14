<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VitalSigns extends Model
{
    use HasFactory;
    protected $fillable = [
        'value',
        'medical_attention_id',
        'detail_vital_signs_id',
        'patients_id',
        'users_id',
    ];
    
}
