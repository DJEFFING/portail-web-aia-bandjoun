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
        Schema::create('type_evernements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("evernement_id")->nullable();
            $table->unsignedBigInteger("type_id")->nullable();
            $table->boolean("status")->default(false);

            $table->foreign("evernement_id")->references("id")->on("evernements")->onDelete("cascade");
            $table->foreign("type_id")->references("id")->on("types")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_evernements');
    }
};
