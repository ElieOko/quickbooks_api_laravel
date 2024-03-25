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
        Schema::create('TCustomerAdresseEmails', function (Blueprint $table) {
            $table->id("CustomerAdresseEmailId");
            $table->integer("CustomerFId")->nullable();
            $table->integer("CompanyFId")->nullable();
            $table->string("Adresse")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TCustomerAdresseEmails');
    }
};
