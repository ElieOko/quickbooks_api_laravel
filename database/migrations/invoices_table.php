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
        Schema::create('TInvoices', function (Blueprint $table) {
            $table->integer("InvoiceId")->unique();
            $table->integer("CustomerFId")->nullable();
            $table->string("DocNumber")->unique();
            $table->integer("Deposit")->default(0)->nullable();
            $table->string("TxnDate")->nullable();
            $table->string("Domain")->default("QBO")->nullable();
            $table->string("PrintStatus")->nullable();
            $table->string("TotalAmt")->nullable();
            $table->string("DueDate")->nullable();
            $table->boolean("ApplyTaxAfterDiscount")->default(false)->nullable();
            $table->boolean("Sparse")->default(false)->nullable();
            $table->string("SyncToken")->nullable();
            $table->float("Balance", 8, 6)->default("0.0")->nullable();
            $table->string("EmailStatus")->default("NotSet")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TInvoices');
    }
};
