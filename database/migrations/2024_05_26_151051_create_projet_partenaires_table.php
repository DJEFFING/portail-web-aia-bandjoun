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
        Schema::create('projet_partenaires', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("partenaire_id")->nullable();
            $table->unsignedBigInteger("projet_id")->nullable();
            $table->boolean("status")->default(false);


            $table->foreign("partenaire_id")->references("id")->on("partenaires")->onDelete("cascade");
            $table->foreign("projet_id")->references("id")->on("projets")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projet_partenaires');
    }
};
