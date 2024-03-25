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
        Schema::create('TCustomerBillAddrs', function (Blueprint $table) {
            $table->id("CustomerBillAddrsId");
            $table->integer("CustomerFId")->nullable();
            $table->integer("EmployeeFId")->nullable();
            $table->integer("VendorFId")->nullable(); //
            $table->integer("CompanyFId")->nullable();
            $table->string("City")->nullable();
            $table->string("Lines")->nullable();
            $table->string("PostalCode")->nullable();
            $table->string("Latitude")->nullable();
            $table->string("Longitude")->nullable();
            $table->string("CountrySubDivisionCode")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TCustomerBillAddrs');
    }
};
