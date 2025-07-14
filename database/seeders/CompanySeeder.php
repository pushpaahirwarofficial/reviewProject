<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert predefined static data
        Company::create([
            'company_name' => 'Red Chillies',
            'company_sub_title' => 'Canada Largest online mortgage lender',
            'company_slug' => 'red-chillies',               
            'category_id' => 1,
            'category_slug' => 1,
            'blank_1' => 'Certified pre-approval Process',
            'blank_2' => 'Online Application Available 24/7',
            'blank_3' => 'Find a Quote Easily',
            'blank_4' => '100% Online Refinance',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu",
        ]);
                
        Company::create([
            'company_name' => 'Marvel Beauty',
            'company_sub_title' => 'Canada Largest online mortgage lender',
            'company_slug' => 'marvel-beauty',               
            'category_id' => 5,
            'category_slug' => 5,
            'blank_1' => 'Certified pre-approval Process',
            'blank_2' => 'Online Application Available 24/7',
            'blank_3' => 'Find a Quote Easily',
            'blank_4' => '100% Online Refinance',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu",
        ]);

        Company::create([
            'company_name' => 'RVM Films',
            'company_sub_title' => 'Canada Largest online mortgage lender',
            'company_slug' => 'rvm-films',               
            'category_id' => 1,
            'category_slug' => 1,
            'blank_1' => 'Certified pre-approval Process',
            'blank_2' => 'Online Application Available 24/7',
            'blank_3' => 'Find a Quote Easily',
            'blank_4' => '100% Online Refinance',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu",
        ]);
                
        Company::create([
            'company_name' => 'Thai Beauty',
            'company_sub_title' => 'Canada Largest online mortgage lender',
            'company_slug' => 'thai-beauty',               
            'category_id' => 5,
            'category_slug' => 5,
            'blank_1' => 'Certified pre-approval Process',
            'blank_2' => 'Online Application Available 24/7',
            'blank_3' => 'Find a Quote Easily',
            'blank_4' => '100% Online Refinance',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu",
        ]);

                
    }
}
