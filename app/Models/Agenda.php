<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Agenda extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fecha_cita', 
        'motivo', 
        'patient_id', 
        'doctor_id', 
        'user_id',
        'state',
    ];

    /**
     * Scope a query to only include active agendas.
     * 
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeReservada($query)
    {
        $query->where('state', 1);
    }

    /**
     * Interact with the agenda status.
     *
     * @return  \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function state(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => [
                0 => 'Cancelada', 
                1 => 'Reservada', 
                2 => 'Abierta',
                3 => 'No asistio'
                ][$value]
        );
    }

    /**
     * Get the doctor that owns the agenda
     * 
     * @return BelongsTo
     */
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    /**
     * Get the patient that owns the agenda
     * 
     * @return BelongsTo
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

}
