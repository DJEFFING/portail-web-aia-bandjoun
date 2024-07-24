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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id")->nullable();
            $table->unsignedBigInteger("revue_id")->nullable();
            $table->string("titre")->nullable();
            $table->longText("description_1")->nullable();
            $table->longText("description_2")->nullable();
            $table->string("media_url")->nullable();
            $table->boolean("status")->default(false);

            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("revue_id")->references("id")->on("revues")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
