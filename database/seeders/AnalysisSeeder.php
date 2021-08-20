<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Visit;
use App\Models\Analysis;

class AnalysisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alivisit = Visit::where('name', 'alivisit')->first()->id;
        $gigyvisit = Visit::where('name', 'gigyvisit')->first()->id;

        Analysis::create(
            [
            'name' => 'analysisAll',
            'visit_id' => $alivisit,
            ],
        );

        Analysis::create(
            [
            'name' => 'analysisGifiy',
            'visit_id' => $gigyvisit,
            ]
        );
    }
}
