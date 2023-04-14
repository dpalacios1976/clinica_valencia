<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeIdentification extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'state',
    ];


    /**
     * Scope a query to only include active identifications.
     * 
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeActivo($query)
    {
        $query->where('state', 1);
    }
}
