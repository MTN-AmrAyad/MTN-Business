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
        Schema::create('bi_growth_books', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('client_email');
            $table->string('client_country_code'); // Ensure to format the string properly
            $table->string('client_phone');
            $table->string('client_country');
            $table->string('bookType');
            $table->string('government');
            $table->string('city');
            $table->string('detailed_address');
            $table->string('receiving_time');
            $table->integer('copies_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bi_growth_books');
    }
};
