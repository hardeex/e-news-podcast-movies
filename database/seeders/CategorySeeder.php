<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = ['Nigeria', 'World', 'Politics', 'Business', 'Health', 'Sport', 'Technology', 
        'Lifestyle', 'Science', 'Opinion', 'Local', 'Weather', 'Information', 'ideas', 'Social', 
        'Cultural', 'Awards', 'Education & Learning', 'Training', 'Community Events', 'Arts & Entertainment',
        'Communication', 'Automobile', 'Agricultural & Farming', 'Hotels', 'Government', 'Legal Services',
        'Merchant', 'Engineering', 'Events Conference', 'Energy & Utilities', 'Car Dealers', 'Artisans', 
        'Security & Emergency', 'Pet Supply', 'Schools', 'Online Influencers', 'Personal Care', 'Toursim & Hospitality',
        'Fashion & Clothing', 'Food & Restaurant', 'Companies', 'Phones & Laptop', 'Religion & Spirituality',
        'Shopping', 'Transportation', 'NGO', 'Online Courses', 'Others'];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
