<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhysicalExams extends Model
{
    use HasFactory;
    public $fillable = [
        'observation',
        'medical_attention_id',
        'patients_id',
        'doctors_id',
        'detail_physical_exams_id',
    ];
}
