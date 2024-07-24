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
        Schema::create('evernements', function (Blueprint $table) {
            $table->id();
            $table->string("titre")->nullable();
            $table->date("date")->nullable();
            $table->string("ville")->nullable();
            $table->string("adress")->nullable();
            $table->longText("description_1")->nullable();
            $table->string("media_url")->nullable();
            $table->longText("description_2")->nullable();
            $table->boolean("status")->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evernements');
    }
};
