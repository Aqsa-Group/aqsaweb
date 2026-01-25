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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->integer('age')->nullable();
            $table->string('department');
            $table->string('degree');
            $table->string('section')->nullable();
            $table->date('contract_start');
            $table->date('contract_end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
