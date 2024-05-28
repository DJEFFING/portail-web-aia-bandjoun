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
        Schema::create('revues', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("pole_recherche_id");
            $table->string("titre");
            $table->longText("description");
            $table->boolean("status")->default(false);

            $table->foreign("pole_recherche_id")->references("id")->on("pole_recherches")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revues');
    }
};
