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
        Schema::create('review', function (Blueprint $table) {
            $table->id(); // Primary key, auto-incrementing
            $table->unsignedBigInteger('user_id'); // Foreign key for user
            $table->unsignedBigInteger('category_id'); // Foreign key for category
            $table->unsignedBigInteger('company_id'); // Foreign key for company
            $table->text('description'); // Description field
            $table->integer('total_star')->default(0); // Total stars
            $table->decimal('average_star', 5, 2)->default(0.00); // Average stars (5 digits with 2 decimal places)
            $table->integer('total_likes')->default(0); // Total likes
            $table->integer('total_comments')->default(0); // Total comments
            $table->string('blank_1')->nullable(); // Additional blank field
            $table->string('blank_2')->nullable(); // Additional blank field
            $table->string('blank_3')->nullable(); // Additional blank field
            $table->string('blank_4')->nullable(); // Additional blank field
            $table->timestamps(); // Created at and Updated at timestamps

            // Add foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            $table->foreign('company_id')->references('id')->on('company')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review');
    }
};
