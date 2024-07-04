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
        Schema::create('app__sup__enterprise__models', function (Blueprint $table) {
            $table->id();
            $table->string("user_id")->nullable();
            $table->string("no_clients")->nullable();
            $table->string("no_styles")->nullable();
            $table->string("client_contacts")->nullable();
            $table->string("pos")->nullable();
            $table->string("expiring_date")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app__sup__enterprise__models');
    }
};
