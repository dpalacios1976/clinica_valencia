<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentDiseases extends Model
{
    use HasFactory;
    protected $fillable =[
        'observation',
        'doctors_id',
        'medical_attention_id',
        'patients_id'
    ];
}
