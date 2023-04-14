<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    use HasFactory;

    protected $fillable = [
        'ruc',
        'razon_social',
        'nombre_comercial',
        'direccion',
        'contribuyente_especial',
        'contabilidad',
        'anbiente_produccion',
        'logo',
        'firma_electronica',
        'password',
        'state',
        'level_id',
    ];

    /**
     * Obtain the level associated with the establishment.
     */
    public function level()
    {
        return $this->belongsTo(Level::class);
    }
    
    /**
     * Scope a query to only include active establishments.
     * 
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeActivo($query)
    {
        $query->where('state', 1);
    }
    
    /**
     * Interact with the establishment's status.
     *
     * @return  \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function state(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => [0 => 'Inactivo', 1 => 'Activo'][$value]
        );
    }

    
}
