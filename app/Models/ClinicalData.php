<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicalData extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'description',
        'code',
        'state',
    ];

    public function scopeActivo($query)
    {
        $query->where('state', 1);
    } 
}
