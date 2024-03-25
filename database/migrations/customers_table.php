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
        Schema::create('TCustomers', function (Blueprint $table) {
            $table->integer("CustomerId")->unique();
            $table->string("Domain")->default("QBO")->nullable();
            $table->string("DisplayName")->unique()->nullable();
            $table->string("GivenName")->nullable();
            $table->string("SyncToken")->nullable();
            $table->string("FullyQualifiedName")->nullable();
            $table->string("CompanyName")->nullable();
            $table->string("FamilyName")->nullable();
            $table->string("PreferredDeliveryMethod")->nullable();
            $table->boolean("Sparse")->default(false)->nullable();
            $table->boolean("Taxable")->default(false)->nullable();
            $table->boolean("Active")->default(true)->nullable();
            $table->boolean("Job")->default(false)->nullable();
            $table->boolean("BillWithParent")->default(false)->nullable();
            $table->string("BalanceWithJobs")->nullable();
            $table->string("PrintOnCheckName")->nullable();
            $table->float("Balance", 8, 6)->default("0.0")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TCustomers');
    }
};
