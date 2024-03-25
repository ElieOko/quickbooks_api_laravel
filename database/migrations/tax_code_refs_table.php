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
        Schema::create('TTaxCodeRefs', function (Blueprint $table) {
            $table->integer("TaxCodeRefId")->unique();
            $table->string("Name")->nullable();
            $table->string("Value")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TTaxCodeRefs');
    }
};
