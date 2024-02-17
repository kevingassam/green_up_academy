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
        Schema::create('dossiers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_user")->nullable()->default(null);
            $table->string("formulaire")->nullable()->default(null);
            $table->string("cv")->nullable()->default(null);
            $table->string("lettre")->nullable()->default(null);
            $table->string("portfolio")->nullable()->default(null);
            $table->string("passport")->nullable()->default(null);
            $table->string("releves")->nullable()->default(null);
            $table->string("attestation")->nullable()->default(null);
            $table->string("photo")->nullable()->default(null);
            $table->string("decission")->nullable()->default(null);
            $table->string("titre")->nullable()->default(null);
            $table->timestamps();

            $table->foreign("id_user")->references("id")->on("users")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossiers');
    }
};
