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
        Schema::create('TCompanies', function (Blueprint $table) {
            $table->integer("CompanyId")->unique();
            $table->string("SyncToken")->nullable();
            $table->string("Domain")->nullable();
            $table->boolean("Sparse")->default(false)->nullable();
            $table->string("SupportedLanguages")->nullable();
            $table->string("CompanyName")->nullable();
            $table->string("Country")->nullable();
            $table->string("FiscalYearStartMonth")->nullable();
            $table->string("LegalName")->nullable();
            $table->string("CompanyStartDate")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TCompanies');
    }
};
