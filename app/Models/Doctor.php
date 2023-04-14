<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'ruc',
        'names',
        'address',
        'senecyt_code',
        'mobile',
        'mobile2',
        'email',
        'logo',
        'consultation_time',
        'state',
    ];

    /**
     * The specialties that belong to the doctor.
     */
    public function specialties()
    {
        return $this->belongsToMany(Specialty::class);
    }

    /**
     * Get the doctor's schedules.
     */
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    protected function getSchedulesCountAttribute($value) 
    {
        return $value ?? $this->schedules_count = $this->schedules()->count();
    }

    /**
     * Scope a query to only include active doctors.
     * 
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeActivo($query)
    {
        $query->where('state', 1);
    }

    /**
     * Interact with the doctor's status.
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
