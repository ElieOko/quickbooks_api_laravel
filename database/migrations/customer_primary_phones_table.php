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
        Schema::create('TPrimaryPhones', function (Blueprint $table) {
            $table->id("PrimaryPhoneId");
            $table->integer("CustomerFId")->nullable();
            $table->integer("EmployeeFId")->nullable();
            $table->integer("VendorFId")->nullable();
            $table->string("FreeFormNumber")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TPrimaryPhones');
    }
};
