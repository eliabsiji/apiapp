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
        Schema::create('style_models', function (Blueprint $table) {
                $table->id();
                $table->string("user_id")->nullable();
                $table->string("style")->nullable();
                $table->string("img")->nullable();
                $table->string("description")->nullable();
                $table->timestamps();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('style_models');
    }
};
