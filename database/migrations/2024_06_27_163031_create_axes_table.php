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
        Schema::create('axes', function (Blueprint $table) {
            $table->id();

            $table->string("titre")->nullable();
            $table->string("code_axe")->nullable();
            $table->longText("description_1")->nullable();
            $table->longText("description_2")->nullable();
            $table->string("media_url")->nullable();
            $table->unsignedBigInteger("user_id")->unique();
            $table->unsignedBigInteger("equipe_id");
            $table->boolean("status")->default(false);

            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("equipe_id")->references("id")->on("equipes")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('axes');
    }
};
