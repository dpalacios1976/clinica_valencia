<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'siglas',
        'state',
    ];

    /**
     * The doctors that belong to the specialty.
     */
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }

    /**
     * Scope a query to only include active specialities.
     * 
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeActive($query)
    {
        $query->where('state', 1);
    }
}
