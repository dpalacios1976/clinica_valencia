<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kinship extends Model
{
    use HasFactory;
    protected $table ='kinship';
    protected $fillable = [
        'description',
        'state',
    ];

    public function scopeActivo($query)
    {
        $query->where('state', 1);
    } 

}
