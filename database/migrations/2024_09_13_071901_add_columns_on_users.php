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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->after('email'); // Add 'phone' after 'email'
            $table->longText('about')->after('phone'); // Add 'about' after 'phone'
            $table->string('website')->after('about'); // Add 'website' after 'about'
            $table->string('image')->after('website'); // Add 'image' after 'website'
            $table->string('blank_1')->after('remember_token'); // Add 'blank_1' after 'image'
            $table->string('blank_2')->after('blank_1'); // Add 'blank_2' after 'blank_1'
            $table->string('blank_3')->after('blank_2'); // Add 'blank_3' after 'blank_2'
            $table->string('blank_4')->after('blank_3'); // Add 'blank_4' after 'blank_3'
        });
        

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['phone', 'about', 'website', 'image', 'blank_1', 'blank_2', 'blank_3', 'blank_4']);
        });
    }
};
