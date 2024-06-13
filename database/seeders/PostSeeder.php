<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    const ACCOUNT_FOR_TEST = 7;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $posts = [
            ['name' => 'Developer'],
            ['name' => 'Commercial'],
            ['name' => 'It manager'],
            ['name' => 'Manager HR'],
        ];

        foreach ($posts as $key => $post) {
            $query = new Post();
            $query->account_id = self::ACCOUNT_FOR_TEST;
            $query->name = $post['name'];
            $query->save();
        }
    }
}
