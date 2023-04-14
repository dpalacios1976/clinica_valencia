<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'state',
    ];

    /**
     * Get the establishment associated with the level.
     */
    public function establishment()
    {
        return $this->hasOne(Establishment::class);
    }

    /**
     * Scope a query to only include active levels.
     * 
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeActivo($query)
    {
        $query->where('state', 1);
    }
}
