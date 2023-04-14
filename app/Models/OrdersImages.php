<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersImages extends Model
{
    use HasFactory;

    protected $fillable =[
        'service',
        'hall',
        'bed',
        'deadline',
        'priorty',
        'can_move',
        'can_remove_bandages',
        'doctor_will_pending_examination',
        'take_x-ray_bed',
        'doctors_id',
        'medical_attention_id',
        'patients_id'


    ];
}
