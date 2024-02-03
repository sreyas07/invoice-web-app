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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('inv_no');
            $table->date('invoice_date');
            $table->foreignId('customer_id')->constrained()->onDelete('cascade');
            $table->string('section_number')->nullable();
            $table->decimal('section_percentage', 8, 2)->nullable();
            $table->decimal('rate', 8, 2)->nullable();
            $table->integer('qty')->nullable();
            $table->decimal('tax_val', 10, 2)->nullable();
            $table->decimal('cgst', 8, 2)->nullable();
            $table->decimal('sgst', 8, 2)->nullable();
            $table->decimal('total', 10, 2)->nullable();
            $table->decimal('cess', 8, 2)->nullable();
            $table->decimal('kfc', 8, 2)->nullable();
            $table->decimal('round_off', 8, 2)->nullable();
            $table->decimal('discount', 10, 2)->nullable();
            $table->decimal('total_invoice_value', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
