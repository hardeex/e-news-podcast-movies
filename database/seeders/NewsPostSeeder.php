<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NewsPost;
use Faker\Factory as Faker;



use Illuminate\Support\Str;

class NewsPostSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $categories = ['Nigeria', 'World', 'Politics', 'Business', 'Health', 'Sport', 'Technology', 
        'Lifestyle', 'Science', 'Opinion', 'Local', 'Weather', 'Information', 'ideas', 'Social', 
        'Cultural', 'Awards', 'Education & Learning', 'Training', 'Community Events', 'Arts & Entertainment',
        'Communication', 'Automobile', 'Agricultural & Farming', 'Hotels', 'Government', 'Legal Services',
        'Merchant', 'Engineering', 'Events Conference', 'Energy & Utilities', 'Car Dealers', 'Artisans', 
        'Security & Emergency', 'Pet Supply', 'Schools', 'Online Influencers', 'Personal Care', 'Toursim & Hospitality',
        'Fashion & Clothing', 'Food & Restaurant', 'Companies', 'Phones & Laptop', 'Religion & Spirituality',
        'Shopping', 'Transportation', 'NGO', 'Online Courses','others'];

        foreach ($categories as $category) {
            foreach (range(1, 10) as $index) {
                $title = $faker->sentence;
                $content = $faker->paragraph;
                $image = $faker->imageUrl(400, 300, 'news'); 
                

                NewsPost::create([
                    'title' => $title,
                    'content' => $content,
                    'category' => $category,
                    'image' => $image,
                ]);
            }
        }
    }
}
