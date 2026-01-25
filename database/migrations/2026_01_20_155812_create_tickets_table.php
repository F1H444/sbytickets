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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id('ticket_id');
            $table->foreignId('order_id')->constrained('orders', 'order_id');
            $table->foreignId('wisata_id')->constrained('wisata', 'wisata_id');
            $table->date('visit_date');
            $table->string('ticket_code', 100)->unique();
            $table->string('visitor_name', 100)->nullable();
            $table->string('visitor_id_card', 50)->nullable();
            $table->enum('status', ['active', 'used', 'expired'])->default('active');
            $table->dateTime('scanned_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
