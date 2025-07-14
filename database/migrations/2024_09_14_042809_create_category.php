<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('category_name'); // Field for category name
            $table->string('category_slug'); // Field for category name
            $table->string('blank_1')->nullable(); // Blank field 1, nullable
            $table->string('blank_2')->nullable(); // Blank field 2, nullable
            $table->string('blank_3')->nullable(); // Blank field 3, nullable
            $table->string('blank_4')->nullable(); // Blank field 4, nullable
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category');
    }
};
