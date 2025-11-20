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
        //ride created by drivers
        Schema::create('rides', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('driver_vehicle_id'); //from auth service 
            $table->string('origin_name');
            $table->string('destination_name');
            $table->time('departure_time'); //14:30:00
            $table->date('date_of_departure');
            $table->integer('available_seats');
            $table->enum('status', ['open', 'full', 'completed','cancelled','draft','inprogress'])->default('draft');
            $table->decimal('contribution_per_seat', 10, 2);
            $table->integer('total_bookings')->default(0);
            $table->decimal('origin_lat', 10, 7)->nullable();
            $table->decimal('origin_long', 10, 7)->nullable();
            $table->decimal('destination_lat', 10, 7)->nullable();
            $table->decimal('destination_long', 10, 7)->nullable();
            $table->boolean('auto_accept')->default(false);
            $table->foreignUuid('ride_type_id');
            $table->boolean('home_pickup')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rides');
    }
};
