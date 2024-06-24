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
        Schema::create('app_styleparameter_models', function (Blueprint $table) {
            $table->id();
            $table->string("user_id")->nullable();
            $table->string("parameterid")->nullable();
            $table->string("styleid")->nullable();
            $table->string("description")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_styleparameter_models');
    }
};
