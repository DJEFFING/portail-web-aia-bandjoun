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
        Schema::create('commentaire_publications', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("email");
            $table->string("site_web")->nullable();
            $table->string("text");
            $table->unsignedBigInteger("publication_id");
            $table->boolean("status")->default(false);

            $table->foreign("publication_id")->references("id")->on("publications")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaire_publications');
    }
};
