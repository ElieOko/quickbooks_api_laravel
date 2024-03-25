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
        Schema::create('TTerms', function (Blueprint $table) {
            $table->integer("TermId")->unique();
            $table->string("SyncToken")->nullable();
            $table->string("Domain")->nullable();
            $table->string("Name")->nullable();
            $table->string("Type")->nullable();
            $table->integer("DueDays")->default(60)->nullable();
            $table->integer("DiscountPercent")->default(0)->nullable();
            $table->integer("DiscountDays")->default(0)->nullable();
            $table->boolean("Sparse")->default(false)->nullable();
            $table->boolean("Active")->default(false)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TTerms');
    }
};
