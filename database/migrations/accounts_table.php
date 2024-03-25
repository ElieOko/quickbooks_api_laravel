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
        Schema::create('TAccounts', function (Blueprint $table) {
            $table->integer("AccountId")->unique();
            $table->integer("CurrencyFId")->nullable();
            $table->string("FullyQualifiedName")->nullable();
            $table->string("Domain")->default("QBO")->nullable();
            $table->string("Name")->nullable();
            $table->string("Classification")->nullable();
            $table->string("AccountSubType")->nullable();
            $table->integer("CurrentBalanceWithSubAccounts")->default(0)->nullable();
            $table->boolean("Sparse")->default(false)->nullable();
            $table->boolean("Active")->default(false)->nullable();
            $table->boolean("SubAccount")->default(false)->nullable();
            $table->integer("CurrentBalance")->default(0)->nullable();
            $table->string("SyncToken")->nullable();
            $table->string("AccountType")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TAccounts');
    }
};
