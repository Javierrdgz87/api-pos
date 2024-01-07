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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('status_id', 2);
            $table->string('name', 255);
            $table->string('legal_representative', 255)->nullable();
            $table->string('alias', 50)->nullable();
            $table->string('rfc', 13)->nullable();
            $table->string('curp', 18)->nullable();
            $table->string('phone', 16)->nullable();
            $table->string('mobile', 16)->nullable();
            $table->string('emails', 255)->nullable();
            $table->text('comments')->nullable();
            $table->integer('credit_limit')->nullable();
            $table->integer('credit_days')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
