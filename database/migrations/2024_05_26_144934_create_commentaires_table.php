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
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->string("nom")->nullable();
            $table->string("email")->nullable();
            $table->string("site_web")->nullable();
            $table->string("text")->nullable();
            $table->unsignedBigInteger("article_id")->nullable();
            $table->boolean("status")->default(false);

            $table->foreign("article_id")->references("id")->on("articles")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaires');
    }
};
