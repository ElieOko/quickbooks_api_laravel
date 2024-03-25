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
        Schema::create('TPurchases', function (Blueprint $table) {
            $table->integer("PurchaseId")->unique();
            $table->integer("CustomerFId")->nullable();
            $table->string("SyncToken")->nullable();
            $table->string("Domain")->nullable();
            $table->string("TxnDate")->nullable();
            $table->float("TotalAmt", 8, 4)->nullable();
            $table->string("PaymentType")->nullable();
            $table->boolean("Sparse")->default(false)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TPurchases');
    }
};
