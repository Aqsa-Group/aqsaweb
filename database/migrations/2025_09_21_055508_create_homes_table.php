<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('homes', function (Blueprint $table) {
        $table->id();
        $table->string('main_title')->nullable();
        $table->text('main_paragraph')->nullable();
        $table->string('main_image')->nullable();

        // cards
        $table->string('card1_title')->nullable();
        $table->text('card1_paragraph')->nullable();
        $table->string('card2_title')->nullable();
        $table->text('card2_paragraph')->nullable();
        $table->string('card3_title')->nullable();
        $table->text('card3_paragraph')->nullable();

        // client
        $table->string('client_image')->nullable();

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
