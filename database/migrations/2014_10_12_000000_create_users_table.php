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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('provider')->nullable(); // Name of the social provider (e.g., 'google', 'facebook')
            $table->string('provider_id')->nullable(); // Unique ID from the provider
            $table->string('provider_token')->nullable(); // Token from the provider (optional, depending on your app)
            $table->string('provider_refresh_token')->nullable(); // Refresh token (optional, depending on your app)
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
