<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TariffDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_of_service',
        'code',
        'description',
        'controls_prices',
        'external_consultation',
        'hospitalization',
        'emergency',
        'geographic_two_percent',
        'high_level_complexity_five_percent',
        'anesthesia_time',
        'first_level_surgery_value_one',
        'first_level_surgery_value_two',
        'first_level_surgery_value_three',
        'second_level_surgery_value_one',
        'second_level_surgery_value_two',
        'second_level_surgery_value_three',
        'third_level_surgery_value_one',
        'third_level_surgery_value_two',
        'third_level_surgery_value_three',
        'first_level_anesthesia_value_one',
        'first_level_anesthesia_value_two',
        'first_level_anesthesia_value_three',
        'second_level_anesthesia_value_one',
        'second_level_anesthesia_value_two',
        'second_level_anesthesia_value_three',
        'third_level_anesthesia_value_one',
        'third_level_anesthesia_value_two',
        'third_level_anesthesia_value_three',
        'tariffs_id'
    ];
}
