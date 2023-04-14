<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CiesDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'description',
        'state',
        'cies_groups_id',
        'chapters_cies_id'
    ];

    public function scopeActivo($query)
    {
        $query->where('state', 1);
    }

}
