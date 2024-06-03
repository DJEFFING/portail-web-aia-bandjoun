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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('telephone')->unique();
            $table->string('grade')->nullable();
            $table->string('adress')->nullable();
 
            $table->string('prenom');
            $table->string('description');
            $table->enum("sexe",['M','F']);

            $table->timestamp('email_verified_at')->nullable();
            $table->string('profil_url')->nullable();
            $table->string("facebook_url")->nullable();
            $table->string("instagram_url")->nullable();
            $table->string("linkdin_url")->nullable();
            $table->string("twiter_url")->nullable();
            $table->string("web_url")->nullable();
            $table->string('password');


            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
