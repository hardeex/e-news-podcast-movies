<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NewsPost;

class NewsPostSeeder extends Seeder
{
    public function run()
    {
        NewsPost::factory()->count(50)->create();
    }
}
