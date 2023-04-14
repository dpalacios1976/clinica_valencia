<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tariffs extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'year',
        'state'
    ];

    public function scopeActivo($query)
    {
        $query->where('state', 1);
    }

}
