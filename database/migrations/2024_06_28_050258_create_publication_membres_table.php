<?php

use App\Models\Publication;
use App\Models\User;
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
        Schema::create('publication_membres', function (Blueprint $table) {
            $table->primary('user_id','publication_id');
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Publication::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publication_membres');
    }
};
