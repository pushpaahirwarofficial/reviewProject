<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $table = 'review';

    protected $fillable = [
        'user_id',
        'category_id',
        'company_id',
        'description',
        'total_star',
    ];

}
