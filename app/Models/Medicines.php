<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicines extends Model
{
    use HasFactory;
    protected $fillable = [
        'codunimed',
        'code',
        'description',
        'shape',
        'concentration',
        'prescription_level',
        'via',
        'exclusive_use',
        'commercial_generic',
        'state',
    ];

    public function scopeActivo($query)
    {
        $query->where('state', 1);
    }

    
}
