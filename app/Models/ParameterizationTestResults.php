<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParameterizationTestResults extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'unit_of_measure',
        'exam_groups_id',
        'state',
    ];
}
