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
        $table->id(); // Adds an auto-incrementing primary key 'id'
        $table->string('name');
        $table->string('email')->unique();
        $table->string('University_id')->unique();
        $table->string('phone_no')->unique();
        $table->integer('semester');
        $table->string('password');
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
