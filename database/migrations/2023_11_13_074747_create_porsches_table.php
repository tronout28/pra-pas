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
        Schema::create('porsches', function (Blueprint $table) {
            $table->id();
            $table->string('model_name');
            $table->integer('horsepower');
            $table->string('color');
            $table->integer('production_year'); // Mengganti 'poduction_year' dengan 'production_year'
            $table->date('manufacture_date');
            $table->string('image');
            $table->timestamps(); // Menggunakan metode timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('porsches');
    }
};
