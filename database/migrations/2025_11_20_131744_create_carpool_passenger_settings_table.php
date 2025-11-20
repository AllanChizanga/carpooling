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
        Schema::create('carpool_passenger_settings', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignUuid('user_id');
            $table->string('home_location')->nullable();
            $table->string('work_location')->nullable();
            $table->string('residential_address')->nullable();
            $table->time('morning_pickup_time')->nullable();
            $table->time('afternoon_pickup_time')->nullable();
            $table->time('evening_pickup_time')->nullable();
            $table->decimal('res_address_latitude', 10, 7)->nullable();
            $table->decimal('res_address_longitude', 10, 7)->nullable();
            $table->string('preferred_home_pickup_point_name')->nullable();
            $table->decimal('home_pickup_point_latitude', 10, 7)->nullable();
            $table->decimal('home_pickup_point_longitude', 10, 7)->nullable();
            $table->text('home_pickup_point_description')->nullable();
            $table->boolean('allow_home_pickup')->default(false);
            $table->enum('driver_gender_preference', ['any', 'male', 'female'])->default('any');
            $table->integer('pickup_radius')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carpool_passenger_settings');
    }
};
