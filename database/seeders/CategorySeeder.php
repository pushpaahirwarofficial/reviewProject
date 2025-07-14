<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // Insert predefined static data
                Category::create([
                    'category_name' => 'Events & Entertainment',
                    'category_slug' => 'events-entertainment',
                ]);
        
                Category::create([
                    'category_name' => 'Animals & Pets',
                    'category_slug' => 'animals-pets',
                ]);
        
                Category::create([
                    'category_name' => 'Home & Garden',
                    'category_slug' => 'home-garden',
                ]);
                
                Category::create([
                    'category_name' => 'Restaurants & Bars',
                    'category_slug' => 'restaurants-bars',
                ]);
        
                Category::create([
                    'category_name' => 'Beauty & Well-being',
                    'category_slug' => 'beauty-well-being',
                ]);
        
                Category::create([
                    'category_name' => 'Food, Beverages & Tobacco',
                    'category_slug' => 'food-beverages-tobacco',
                ]);

                Category::create([
                    'category_name' => 'Home & Services',
                    'category_slug' => 'home-services',
                ]);
        
                Category::create([
                    'category_name' => 'Shopping & Fashion',
                    'category_slug' => 'shopping-fashion',
                ]);
        
                Category::create([
                    'category_name' => 'Business Services',
                    'category_slug' => 'business-services',
                ]);

                Category::create([
                    'category_name' => 'Health & Medical',
                    'category_slug' => 'health-medical',
                ]);
        
                Category::create([
                    'category_name' => 'Legal Services & Government',
                    'category_slug' => 'legal-services-government',
                ]);
        
                Category::create([
                    'category_name' => 'Sports',
                    'category_slug' => '',
                ]);

                Category::create([
                    'category_name' => 'Construction & Manufacturing',
                    'category_slug' => 'construction-manufacturing',
                ]);
        
                Category::create([
                    'category_name' => 'Media & Publishing',
                    'category_slug' => 'media-publishing',
                ]);
        
                Category::create([
                    'category_name' => 'Travel & Vacation',
                    'category_slug' => 'travel-vacation',
                ]);
    }
}
