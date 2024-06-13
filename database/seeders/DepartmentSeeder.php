<?php

namespace Database\Seeders;

use App\Models\Department;
use PhpParser\Node\Expr\New_;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            ['name' => 'Logistic'],
            ['name' => 'IT'],
            ['name' => 'Marketing'],
            ['name' => 'Finances'],
            ['name' => 'Human Resources'],
        ];

        foreach ($departments as $key => $department) {
            $query = new Department();
            $query->account_id = 7;
            $query->name = $department['name'];
            $query->save();
        }
    }
}
