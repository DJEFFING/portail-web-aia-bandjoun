<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('equipe_projets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("projet_id");
            $table->unsignedBigInteger("equipe_id");
            $table->unsignedBigInteger("role_equipe_projet_id");

            $table->foreign("projet_id")->references("id")->on("projets")->onDelete('cascade');
            $table->foreign("equipe_id")->references("id")->on("equipes")->onDelete('cascade');
            $table->foreign("role_equipe_projet_id")->references("id")->on("role_equipe_projets")->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipe_projets');
    }
};
