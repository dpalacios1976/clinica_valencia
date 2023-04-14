<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReasonConsultation extends Model
{
    use HasFactory;
    protected $table ='reason_consultation';
    protected $fillable = ['reason','status','medical_attention_id'];
}
