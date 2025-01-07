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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appointment_id')->constrained('appointments'); 
            $table->decimal('amount', 10, 2); 
            $table->enum('payment_method', ['cash', 'card', 'online']);  
            $table->enum('payment_status', ['paid', 'pending', 'failed'])->default('paid'); 
            $table->timestamp('payment_date')->default(DB::raw('CURRENT_TIMESTAMP')); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
