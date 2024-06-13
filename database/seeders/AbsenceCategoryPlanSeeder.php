<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AbsenceCategoryPlan;

class AbsenceCategoryPlanSeeder extends Seeder
{
    const ACCOUNT_FOR_TEST = 7;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = new AbsenceCategoryPlan();
        $query->absence_category_id = 1;
        $query->absence_plan_id = 1;
        $query->save();
    }
}
