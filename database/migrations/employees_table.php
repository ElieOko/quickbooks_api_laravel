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
        Schema::create('TEmployees', function (Blueprint $table) {
            $table->integer("EmployeeId")->unique();
            $table->string("Domain")->nullable();
            $table->string("GivenName")->nullable();
            $table->string("FamilyName")->nullable();
            $table->string("DisplayName")->nullable();
            $table->string("PrintOnCheckName")->nullable();
            $table->string("SSN")->nullable();
            $table->boolean("Sparse")->default(false)->nullable();
            $table->boolean("BillableTime")->default(false)->nullable();
            $table->boolean("Active")->default(false)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TEmployees');
    }
};
