<?php

namespace Neop\Database\Seeders;

use Illuminate\Database\Seeder;
use Neop\Blog\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(20)->create();
    }
}
