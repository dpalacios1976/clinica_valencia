<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exams extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'state',
        'exam_groups_id'
    ];

    public function scopeActivo($query)
    {
        $query->where('state', 1);
    }
}
