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
            $table->string('password');
            $table->string('user_address')->nullable();
            $table->string('user_image')->nullable();
            $table->string('phone')->nullable();
            $table->string('user_experties')->nullable();
            $table->string('user_qualification')->nullable();
            $table->string('gender')->nullable();
            $table->string('usertype')->default(0); // Set default value to 0
            $table->string('service')->nullable();
            $table->timestamp('email_verified_at')->nullable();
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