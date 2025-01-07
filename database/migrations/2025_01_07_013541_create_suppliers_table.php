<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('profile_image')->nullable();
            $table->string('name'); 
            $table->string('email')->unique();  
            $table->string('phone_number', 50)->nullable(); 
            $table->string('logo')->nullable();  
            $table->string('company_name')->nullable(); 
            $table->string('company_email')->nullable();
            $table->string('company_phone_number', 50)->nullable();  
            $table->text('company_address')->nullable(); 
            $table->timestamps();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP')); 
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->onUpdate(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
