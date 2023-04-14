<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'time_from',
        'time_to',
        'morning_from',
        'morning_to',
        'afternoon_from',
        'afternoon_to',
        'doctor_id',
        'created_by',
        'state',
    ];
    
}
