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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
          
            $table->unsignedBigInteger("type_publication_id");
            $table->unsignedBigInteger("annee_publication_id");
            $table->string("titre")->nullable();
            $table->longText("description_1")->nullable();
            $table->longText("description_2")->nullable();
            $table->string("media_url")->nullable();
            $table->string("lien_externe")->nullable();
            $table->boolean("status")->default(false);

            
            $table->foreign("type_publication_id")->references("id")->on("type_publications")->onDelete("cascade");
            $table->foreign("annee_publication_id")->references("id")->on("annee_publications")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
