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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('code')->unique();
            $table->string('name');
            $table->string('hsn_sancode')->nullable();
            $table->boolean('rc_applicable')->default(false);
            $table->boolean('track_inventory')->default(false);
            $table->string('sl_no')->nullable();
            $table->integer('quantity')->nullable();
            $table->decimal('p_rate', 8, 2)->nullable();
            $table->decimal('s_rate', 8, 2)->nullable();
            $table->decimal('value', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
