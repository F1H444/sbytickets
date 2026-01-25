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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->foreignId('user_id')->constrained('users', 'user_id');
            $table->string('invoice_number', 50)->unique();
            $table->decimal('total_amount', 10, 2);
            $table->decimal('tax_amount', 10, 2)->nullable();
            $table->enum('payment_status', ['unpaid', 'paid', 'expired', 'refunded'])->default('unpaid');
            $table->string('payment_method', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
