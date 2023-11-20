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
        Schema::create('toyotas', function (Blueprint $table) {
            $table->id();
            $table->string('model_name');
            $table->integer('horsepower');
            $table->string('color');
            $table->integer('production_year'); 
            $table->date('manufacture_date');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toyotas');
    }
};
