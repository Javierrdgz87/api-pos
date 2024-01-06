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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->date('purchase_date');
            $table->string('folio');
            $table->string('currency_id', 3);
            $table->integer('supplier_id');
            $table->decimal('cash', 10, 6);
            $table->decimal('check', 10, 6);
            $table->decimal('coupons', 10, 6);
            $table->decimal('card', 10, 6);
            $table->decimal('transfer', 10, 6);
            $table->decimal('total', 10, 6);
            // credit
            $table->integer('credit_days');
            $table->decimal('credit_limit', 10, 4);
            $table->decimal('credit_available', 10, 4);
            $table->date('due_date');
            $table->integer('credit_days');
            // other payment method

            $table->decimal('discount', 10, 6);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
