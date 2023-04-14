<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrgansSystems extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'description',
        'state'
    ];

    public function scopeActivo($query)
    {
        $query->where('state', 1);
    }
    
}
