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
        Schema::create('TDeposits', function (Blueprint $table) {
            $table->integer("DepositId")->unique();
            $table->string("SyncToken")->nullable();
            $table->string("Domain")->nullable();
            $table->string("TxnDate")->nullable();
            $table->float("TotalAmt", 8, 6)->default("0.0")->nullable();
            $table->boolean("Sparse")->default(false)->nullable();
            $table->string("Type")->nullable();
            $table->integer("DiscountDays")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TDeposits');
    }
};
