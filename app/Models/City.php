<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'descripcion',
        'state',
        'province_id',
    ];

    /**
     * Get the parishes for the city.
     */
    public function parishes()
    {
        return $this->hasMany(Parish::class);
    }

    /**
     * Scope a query to only include active cities.
     * 
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeActivo($query)
    {
        $query->where('state', 1);
    }
}
