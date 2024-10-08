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
        Schema::create('pole_recherches', function (Blueprint $table) {
            $table->id();
            $table->string("titre");
            $table->string("code_pole")->nullable();
            $table->longText("description_1")->nullable();
            $table->longText("description_2")->nullable();
            $table->string("media_url")->nullable();
            $table->unsignedBigInteger("user_id")->unique(); //responssable du Domaine de Recherche
            $table->boolean("status")->default(false);

            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pole_recherches');
    }
};
