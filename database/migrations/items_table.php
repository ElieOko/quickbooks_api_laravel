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
        Schema::create('TItems', function (Blueprint $table) {
            $table->integer("ItemId")->unique();
            $table->string("FullyQualifiedName")->nullable();
            $table->string("Domain")->default("QBO")->nullable();
            $table->string("Name")->nullable();
            $table->string("SyncToken")->nullable();
            $table->string("Type")->nullable();
            $table->boolean("Sparse")->default(false)->nullable();
            $table->boolean("Active")->default(false)->nullable();
            $table->boolean("TrackQtyOnHand")->default(true)->nullable();
            $table->integer("UnitPrice")->nullable();
            $table->integer("PurchaseCost")->nullable();
            $table->integer("QtyOnHand")->nullable();
            $table->boolean("Taxable")->default(false)->nullable();
            $table->string("InvStartDate")->nullable();
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TItems');
    }
};
