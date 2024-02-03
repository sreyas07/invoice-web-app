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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('group');
            $table->string('name');
            $table->decimal('opening_balance', 10, 2)->nullable();
            $table->enum('cr_dr', ['Cr', 'Dr']);
            $table->enum('registration_type', ['Regular', 'Unregistered']);
            $table->boolean('ecommerce_operator')->default(false);
            $table->string('trade_name')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email')->nullable();
            $table->decimal('shrinkage_percentage', 5, 2)->nullable();
            $table->string('building_name')->nullable();
            $table->string('building_no')->nullable();
            $table->string('floor_no')->nullable();
            $table->string('street')->nullable();
            $table->string('post')->nullable();
            $table->string('location_place')->nullable();
            $table->string('country')->nullable();
            $table->string('pincode')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
