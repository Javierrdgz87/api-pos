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
        Schema::table('products', function (Blueprint $table) {
            $table->string('product_key')->nullable(); // You can customize the column type and options
            $table->string('alternative_product_key')->nullable(); // You can customize the column type and options
            $table->integer('department_id');
            $table->string('sat_id')->nullable();
            $table->string('buy_unit_measure_id', 3);
            $table->string('sale_unit_measure_id', 3);
            $table->decimal('factor', 10, 2)->default(1);
            $table->boolean('inventory_managment')->nullable();
            $table->decimal('cost', 12, 6);
            $table->decimal('cost_without_taxes', 12, 6);
            $table->decimal('cost_piece', 12, 6);
            $table->decimal('stock_quantity', 10, 3)->nullable();
            $table->decimal('min_quantity', 10, 3)->nullable();
            $table->decimal('max_quantity', 10, 3)->nullable();
            $table->boolean('expires')->default(false);
            $table->timestamp('expiration_date')->nullable();
            $table->boolean('is_service')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('product_key');
            $table->dropColumn('alternative_product_key');
            $table->dropColumn('department_id');
            $table->dropColumn('sat_id');
            $table->dropColumn('buy_unit_measure_id');
            $table->dropColumn('sale_unit_measure_id');
            $table->dropColumn('factor');
            $table->dropColumn('inventory_managment');
            $table->dropColumn('cost');
            $table->dropColumn('cost_with_taxes');
            $table->dropColumn('stock_quantity');
            $table->dropColumn('min_quantity');
            $table->dropColumn('expires');
            $table->dropColumn('expiration_date');
            $table->dropColumn('is_service');
        });
    }
};
