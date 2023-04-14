<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(RolSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(SpecialtySeeder::class);
        $this->call(ProvinceSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(ParishSeeder::class);
        $this->call(IdentityGenderSeeder::class);
        $this->call(SexualOrientationSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(CiiuSeeder::class);
        $this->call(CiuoSeeder::class);
        $this->call(TypeBloodSeeder::class);
        $this->call(NationalitySeeder::class);
        $this->call(MaritalStatusSeeder::class);
        $this->call(TypeIdentificationSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(EducationFormalSeeder::class);
        $this->call(EthnicitySeeder::class);
        $this->call(InsuranceSeeder::class);
        $this->call(CareStatusSeeder::class);
        $this->call(TypeMedicalCareSeeder::class);
        $this->call(TypeDisabilitySeeder::class);
        $this->call(KinshipSeeder::class);
        $this->call(ClinicalDataSeeder::class);
        $this->call(DetailVitalSignsSeeder::class);
        $this->call(OrgansSystemsSeeder::class);
        $this->call(DetailPhysicalExamsSeeder::class);
        $this->call(ChaptersCiesSeeder::class);
        $this->call(CiesGroupsSeeder::class);
        $this->call(CiesDetailsSeeder::class);
        $this->call(TariffsSeeder::class);
        $this->call(TariffDetailSeeder::class);
        $this->call(MedicinesSeeder::class);
        $this->call(ExamGroupsSeeder::class);
        $this->call(ExamsSeeder::class);
        $this->call(ParameterizationTestResultsSeeder::class);
        $this->call(ImagesSeeder::class);
        $this->call(UltrasoundDataSeeder::class);
    }
}
