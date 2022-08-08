<?php

namespace Neop\Database\Seeders;

use Illuminate\Database\Seeder;
use Neop\Blog\Models\BlogTag;

class BlogTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogTag::factory(5)->create();
    }
}
