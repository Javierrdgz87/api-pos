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
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('movement_type_id');
            $table->decimal('stock_quantity', 10, 3);
            $table->decimal('min_quantity', 10, 3)->nullable();
            $table->decimal('max_quantity', 10, 3)->nullable();
            $table->boolean('expires')->default(false);
            $table->timestamp('expiration_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};
