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
        Schema::create('TVendors', function (Blueprint $table) {
            $table->integer("VendorId")->unique();
            $table->string("Domain")->nullable();
            $table->string("Title")->nullable();
            $table->string("DisplayName")->nullable();
            $table->string("GivenName")->nullable();
            $table->string("FamilyName")->nullable();
            $table->string("SyncToken")->nullable();
            $table->string("PrintOnCheckName")->nullable();
            $table->string("AcctNum")->nullable();
            $table->boolean("Sparse")->default(false)->nullable();
            $table->boolean("Active")->default(false)->nullable();
            $table->string("Suffix")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TVendors');
    }
};
