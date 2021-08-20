<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Patient;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Patient::create(
            [
            'name' => 'ali',
            'birth_date' => '1980-03-01',
            'password' => bcrypt('12345'),
            ]
        );

        Patient::create(
            [
            'name' => 'gigy',
            'birth_date' => '1980-01-01',
            'password' => bcrypt('12345'),
            ]
        );
    }
}
