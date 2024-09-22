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
            $table->id(); // Crea un campo 'id' auto_increment
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->foreignId('room_id')->constrained()->onDelete('cascade'); 
            $table->timestamp('order_date');
            $table->timestamp('check_in'); 
            $table->timestamp('check_out'); 
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings'); // Elimina la tabla si existe
    }
};
