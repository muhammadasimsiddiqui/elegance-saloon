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
            // $table->foreignId('user_id')->constrained('users');
            // $table->foreignId('service_id')->constrained('services');
            // $table->foreignId('stylist_id')->constrained('users');
            // $table->dateTime('appointment_time');
            // $table->string('email')->nullable(); 
            // $table->string('phone_number', 50)->nullable();
            // $table->enum('status', ['booked', 'completed', 'canceled'])->default('booked');
            // $table->timestamps();
            // $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP')); 
            // $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->onUpdate(DB::raw('CURRENT_TIMESTAMP'));
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
