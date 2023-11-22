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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->constrained()->cascadeOnDelete();
            $table->timestamp('booked_at');
            $table->string('occupant_name');
            $table->string('occupant_gender');
            $table->string('occupant_email');
            $table->string('occupant_phone');
            $table->string('occupant_organization');
            $table->string('activity_type');
            $table->string('activity_name');
            $table->string('activity_desc');
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
