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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('pickupLocation');
            $table->string('dropoffLocation');
            $table->string('pickupTime');
            $table->string('dropoffTime');
            $table->unsignedBigInteger('User_id');
            $table->unsignedBigInteger('car_id');
            $table->foreign('User_id')
            ->references('id')
            ->on('Users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('car_id')
            ->references('id')
            ->on('vehicles')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
