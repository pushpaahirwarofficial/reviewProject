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
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->string('company_name'); // Field for category name
            $table->string('company_sub_title'); // Field for category name
            $table->string('company_slug'); // Field for category name
            $table->string('category_slug'); // Field for category name
            $table->unsignedBigInteger('category_id')->nullable(); // Use unsignedBigInteger for id references
            // Create the foreign key constraint
            $table->foreign('category_id')->references('id')->on('category')->onDelete('set null');
            $table->string('user_id'); // Field for user id
            $table->string('website')->nullable(); // Field for category name
            $table->longText('benefit'); 
            $table->longText('terms'); 
            $table->longText('pros'); 
            $table->longText('cons'); 
            $table->string('image');
            $table->string('image_logo'); 
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
        Schema::dropIfExists('company');
    }
};
