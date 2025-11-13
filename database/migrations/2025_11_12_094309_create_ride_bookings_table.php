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
        Schema::create('ride_bookings', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignUuid('user_id');
            $table->foreignUuid('ride_id');
            $table->decimal('contribution_total_amount', 10, 2);
            $table->decimal('contribution_paid', 10, 2);
            $table->decimal('contribution_balance', 10, 2);
            $table->string('currency', 10);
            $table->string('payment_method');
            $table->enum('payment_status', ['pending', 'completed', 'failed'])->default('pending');
            $table->enum('booking_status', ['active','inprogress', 'cancelled', 'completed','pending','accepted','rejected'])->default('pending');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ride_bookings');
    }
};
