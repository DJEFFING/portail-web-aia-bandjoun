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
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string("titre");
            $table->longText("description_1");
            $table->longText("description_2");
            $table->date("date_debut");
            $table->date("date_fin");
            $table->string("media_url");
            $table->unsignedBigInteger("user_id")->unique(); // responssable du projet
            $table->unsignedBigInteger("pole_recherche_id");
            $table->boolean("status")->default(false);

            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("pole_recherche_id")->references("id")->on("pole_recherches")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};
