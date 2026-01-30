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
        Schema::table('wisata', function (Blueprint $table) {
            $table->decimal('base_price_weekday', 15, 2)->change();
            $table->decimal('base_price_weekend', 15, 2)->change();
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->decimal('total_amount', 15, 2)->change();
            $table->decimal('tax_amount', 15, 2)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('wisata', function (Blueprint $table) {
            $table->decimal('base_price_weekday', 10, 2)->change();
            $table->decimal('base_price_weekend', 10, 2)->change();
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->decimal('total_amount', 10, 2)->change();
            $table->decimal('tax_amount', 10, 2)->nullable()->change();
        });
    }
};
