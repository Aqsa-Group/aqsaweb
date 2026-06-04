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
        Schema::create('user_information', function (Blueprint $table) {
            $table->id();
            $table->string('business_name');
            $table->string('business_type')->nullable();
            $table->string('category')->nullable();
            $table->string('contact_person')->nullable();
            $table->text('business_description')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('third_number')->nullable();
            $table->string('city')->nullable();
            $table->text('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_information');
    }
};
