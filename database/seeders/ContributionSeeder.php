<?php

namespace Database\Seeders;

use App\Models\Contribution;
use Illuminate\Database\Seeder;

class ContributionSeeder extends Seeder
{
    const ACCOUNT_FOR_TEST = 7;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contributions = [
            ['name' => 'CNSS', 'rate' => 12.9, 'maximum' => 6000],
            ['name' => 'SMIR', 'rate' => 12.9],
        ];

        foreach ($contributions as $key => $contribution) {
            $query = new Contribution();
            $query->account_id = self::ACCOUNT_FOR_TEST;
            $query->name = $contribution['name'];
            $query->rate = $contribution['rate'];
            if (array_key_exists('maximum', $contribution)) {
                $query->maximum = $contribution['maximum'];
            }
            $query->save();
        }
    }
}
