<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestForExams extends Model
{
    use HasFactory;
    protected $fillable = [
        'service',
        'hall',
        'bed',
        'deadline',
        'priority',
        'shooting_date',
        'doctors_id',
        'medical_attention_id',
        'patients_id',
        'msp_forms_id'
    ];
}
