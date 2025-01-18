<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('service_id');
            $table->foreignId('stylist_id');
            $table->date('date');
            $table->Time('time');
            $table->string('name')->nullable(); 
            $table->string('email')->nullable(); 
            $table->string('phone_number', 50)->nullable();
            $table->enum('apt_status', ['booked', 'completed', 'canceled', 'pending'])->default('pending');
            $table->timestamps();
               });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
