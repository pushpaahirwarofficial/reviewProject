<?php

use App\Models\User; 
use App\Models\Reviews; 
use App\Models\Category; 
use App\Models\Company; 

if (!function_exists('getUsers')) {
    function getUsers($user_id) {
        return User::where('id', $user_id)->first();
    }
}

if (!function_exists('avgStars')) {
    function avgStars($company_id) {
        return round(Reviews::where('company_id', $company_id)->avg('total_star'), 1);
    }
}

if (!function_exists('totalStars')) {
    function totalStars($company_id) {
        return Reviews::where('company_id', $company_id)->sum('total_star');
    }
}

if (!function_exists('sumStars')) {
    function sumStars($company_id) {
        return Reviews::where('company_id', $company_id)->sum('total_star');
    }
}

if (!function_exists('companySlug')) {
    function companySlug($company_id) {
        return Company::where('id', $company_id)->first()->company_slug;
    }
}

if (!function_exists('categorySlug')) {
    function categorySlug($category_id) {
        return Category::where('id', $category_id)->first()->category_slug;
    }
}


if (!function_exists('categoryData')) {
    function categoryData($category_id) {
        return Category::where('id', $category_id)->first();
    }
}

if (!function_exists('starsView')) {
    function starsView($company_id) {
        // Get the average rating, rounded to 1 decimal
        $averageStars = round(Reviews::where('company_id', $company_id)->avg('total_star'), 1);
        $wholeStars = floor($averageStars); // Get the integer part
        $decimalStars = $averageStars - $wholeStars; // Get the decimal part
        $output = '';

        // If there are no ratings (average is 0)
        if ($averageStars == 0) {
            for ($i = 0; $i < 5; $i++) {
                $output .= '<i class="bi bi-star star-active"></i>';
            }
        } else {
            // Display full stars
            for ($i = 0; $i < $wholeStars; $i++) {
                $output .= '<i class="bi bi-star-fill star-active"></i>';
            }

            // Display half star if there is a decimal part
            if ($decimalStars > 0) {
                $output .= '<i class="bi bi-star-half star-active"></i>';
                $wholeStars++; // Increment since we add a half-star
            }

            // Display remaining empty stars
            for ($j = 0; $j < (5 - $wholeStars); $j++) {
                $output .= '<i class="bi bi-star star-active"></i>';
            }
        }

        // Return the generated HTML
        return $output;
    }
}
