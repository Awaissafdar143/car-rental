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

        Schema::table('vehicles', function (Blueprint $table) {

            $table->foreign('car_type')
                ->references('brand_id')
                ->on('brands')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('vehicle_type')
                ->references('vehicle_id')
                ->on('vehicle_types')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forgein');
    }
};
