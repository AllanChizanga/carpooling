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
        Schema::create('ride_notices', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('ride_id');
            $table->text('message');
            $table->enum('notice_type', ['info', 'delay', 'cancel', 'custom'])->default('info');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ride_notices');
    }
};
