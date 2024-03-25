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
        Schema::create('TSalesItemLineDetailInvoices', function (Blueprint $table) {
            $table->integer("SalesItemLineDetailInvoiceId")->unique();
            $table->integer("InvoiceLineFId")->nullable();
            $table->integer("Quantity")->nullable();
            $table->integer("UnitPrice")->nullable();
            $table->integer("TaxCodeRefId")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TSalesItemLineDetailInvoices');
    }
};
