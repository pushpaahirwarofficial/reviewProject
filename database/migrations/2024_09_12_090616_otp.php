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
        Schema::create('otp', function (Blueprint $table) {
            $table->id();
            $table->string('otp', 6); // Storing the OTP, 6 digits long
            $table->string('email')->index(); // Storing the email associated with the OTP
            $table->boolean('is_used')->default(false); // Indicates if the OTP has been used
            $table->timestamp('expires_at'); // Expiration time of the OTP
            $table->timestamps(); // Laravel's created_at and updated_at fields
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('otp');
    }
};
