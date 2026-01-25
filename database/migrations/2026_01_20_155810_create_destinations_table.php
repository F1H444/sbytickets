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
        Schema::create('wisata', function (Blueprint $table) {
            $table->id('wisata_id');
            $table->string('name', 100);
            $table->string('image_url', 255)->nullable();
            $table->text('location')->nullable();
            $table->decimal('base_price_weekday', 10, 2);
            $table->decimal('base_price_weekend', 10, 2);
            $table->integer('capacity_per_day')->default(100);
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wisata');
    }
};
