<?php

namespace Database\Seeders;

use App\Models\AddressSite;
use Illuminate\Database\Seeder;

class AddressSiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AddressSite::factory()->count(100)->create();
    }
}
