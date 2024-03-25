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
        Schema::create('TInvoiceLines', function (Blueprint $table) {
            $table->integer("InvoiceLinesId")->nullable();
            $table->integer("InvoiceFId")->nullable();
            $table->string("Description")->nullable();
            $table->string("DetailType")->nullable();
            $table->string("LineNum")->nullable();
            $table->float("Amount", 8, 6)->default("0.0")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TInvoiceLines');
    }
};
