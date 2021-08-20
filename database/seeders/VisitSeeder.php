<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;
use App\Models\Visit;

class VisitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ali = Patient::where('name', 'ali')->first()->id;
        $gigy = Patient::where('name', 'gigy')->first()->id;
        Visit::create(
            [
            'name' => 'alivisit',
            'patient_id' => $ali,
            ]
        );

        Visit::create(
            [
            'name' => 'gigyvisit',
            'patient_id' => $gigy,
            ]            
        );
    }
}
