<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'state',
    ];

    /**
     * Get the cities for the province.
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
