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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->unique()->constrained()->onDelete('cascade');
            $table->decimal('amount', 8, 2);
            $table->enum('payment_method', ['cash', 'credit_card', 'debit_card', 'bank_transfer', 'e_wallet'])
                ->default('cash');
            $table->enum('payment_status', ['pending', 'paid', 'failed', 'refunded'])
                ->default('pending');
            $table->string('transaction_id')->nullable()->unique();
            $table->json('payment_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_payments');
    }
};
