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
        Schema::create('televerssements', function (Blueprint $table) {
            $table->id();
            $table->string("titre");
            $table->unsignedBigInteger("id_auteur")->nullable()->default(null);
            $table->unsignedBigInteger("id_user_destination")->nullable()->default(null);
            $table->string("fichier")->nullable()->default(null);
            $table->timestamps();

            $table->foreign("id_user_destination")->references("id")->on("users")->cascadeOnDelete();
            $table->foreign("id_auteur")->references("id")->on("users")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('televerssements');
    }
};
