<?php

namespace Database\Seeders;

use App\Models\AbsencePlan;
use Illuminate\Database\Seeder;

class AbsencePlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $absencePlans = [
            ['name' => 'CDI'],
            ['name' => 'CDD'],
            ['name' => 'Temporary'],
        ];

        foreach ($absencePlans as $key => $absencePlan) {
            $query = new AbsencePlan();
            $query->name = $absencePlan['name'];
            $query->save();
        }
    }
}
