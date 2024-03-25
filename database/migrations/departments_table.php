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
        Schema::create('TDepartments', function (Blueprint $table) {
            $table->integer("DepartementId")->unique();
            $table->string("FullyQualifiedName")->nullable();
            $table->string("Domain")->nullable();
            $table->string("Name")->nullable();
            $table->string("SyncToken")->nullable();
            $table->boolean("SubDepartment")->default(false)->nullable();
            $table->boolean("Sparse")->default(false)->nullable();
            $table->boolean("Active")->default(true)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TDepartments');
    }
};
