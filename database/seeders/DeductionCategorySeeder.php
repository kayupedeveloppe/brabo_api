<?php

namespace Database\Seeders;

use App\Models\DeductionCategory;
use Illuminate\Database\Seeder;

class DeductionCategorySeeder extends Seeder
{
    const ACCOUNT_FOR_TEST = 7;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $deductions = [
            ['name' => 'Opposition'],
            ['name' => 'Advance'],
        ];

        foreach ($deductions as $key => $deduction) {
            $query = new DeductionCategory();
            $query->account_id = self::ACCOUNT_FOR_TEST;
            $query->name = $deduction['name'];
            $query->save();
        }
    }
}
