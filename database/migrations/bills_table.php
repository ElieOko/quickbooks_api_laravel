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
        Schema::create('TBills', function (Blueprint $table) {
            $table->integer("BillId")->unique();
            $table->string("SyncToken")->nullable();
            $table->string("Domain")->default("QBO")->nullable();
            $table->string("TxnDate")->nullable();
            $table->string("DueDate")->nullable();
            $table->integer("Balance")->default(0)->nullable();
            $table->float("TotalAmt", 8, 6)->default("0.0")->nullable();
            $table->integer("CurrencyFId")->nullable();
            $table->integer("VendorFId")->nullable();
            $table->integer("APAccountFId")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TBills');
    }
};
