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
        Schema::create('user_projets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("projet_id");
            $table->unsignedBigInteger("role_projet_id");
            $table->boolean("status")->default(false);


            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("projet_id")->references("id")->on("projets")->onDelete("cascade");
            $table->foreign("role_projet_id")->references("id")->on("role_projets")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_projets');
    }
};
