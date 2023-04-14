<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $numbers = array(17, 02, 07, 11, 10);
        $num_ale = $numbers[mt_rand(0, count($numbers) - 1)];
        $mobile = array(9, 2, 4);
        $mob_ale = $mobile[mt_rand(0, count($mobile) - 1)];
        $s = str_pad($mob_ale, 2, "0", STR_PAD_LEFT);
        $times = array(20, 30, 45, 60);
        $times_ale = $times[mt_rand(0, count($times) - 1)];
         
        return [
            'ruc' => str_pad($num_ale, 13, rand(0, 999), STR_PAD_RIGHT),
            'names' => strtoupper($this->faker->firstName()).' '.strtoupper($this->faker->firstName()).' '.strtoupper($this->faker->lastName()),
            'address' => $this->faker->address(),
            'senecyt_code' => str_pad(1, 10, rand(0, 9999), STR_PAD_RIGHT),
            'mobile' => str_pad($s, 10, rand(0, 9999), STR_PAD_RIGHT),
            'mobile2' => str_pad($s, 10, rand(0, 9999), STR_PAD_RIGHT),
            'email' => $this->faker->unique()->safeEmail(),
            'consultation_time' => $times_ale,
        ];
    }
}
