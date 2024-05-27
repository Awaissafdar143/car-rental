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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('car_name');
            $table->Integer('car_review')->default(5);
            $table->foreignId('car_type');
            $table->string('car_image');
            $table->Integer('car_passenger');
            $table->Integer('car_gate')->nullable();
            $table->Integer('car_rent');
            $table->Text('shortdescription')->nullable();
            $table->string('car_luggage');
            $table->string('car_fuel_type');
            $table->string('car_engine');
            $table->string('car_model_year');
            $table->string('car_exterior_color');
            $table->string('car_interior_color');
            // $table->foreign('car_type')->references('car_id')->on('brand');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle');
    }
};
