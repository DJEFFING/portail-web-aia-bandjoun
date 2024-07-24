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
        Schema::create('user_evernements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id")->nullable();
            $table->unsignedBigInteger("evernement_id")->nullable();
            $table->unsignedBigInteger("role_evernement_id")->nullable();
            $table->boolean("status")->default(false);


            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("evernement_id")->references("id")->on("evernements")->onDelete("cascade");
            $table->foreign("role_evernement_id")->references("id")->on("role_evernements")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_evernements');
    }
};
