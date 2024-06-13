<?php

namespace Database\Seeders;

use App\Models\AbsenceCategory;
use Illuminate\Database\Seeder;

class AbsenceCategorySeeder extends Seeder
{
    const ACCOUNT_FOR_TEST = 7;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            ['name' => 'Salary'],
            ['name' => 'Compensation'],
            ['name' => 'Bonuses'],
            ['name' => 'Advantage'],
        ];

        foreach ($categories as $key => $category) {
            $query = new AbsenceCategory();
            $query->account_id = self::ACCOUNT_FOR_TEST;
            $query->name = $category['name'];
            $query->save();
        }
    }
}
