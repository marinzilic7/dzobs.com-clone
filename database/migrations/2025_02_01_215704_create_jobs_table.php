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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('naziv_pozicije');
            $table->string('iskustvo');
            $table->string('kompanija');
            $table->string('lokacija');
            $table->string('opis_pozicije');
            $table->string('link');
            $table->string('ime');
            $table->string('kontakt');
            $table->string('vrsta_oglasa')->nullable();
            $table->string('tip_oglasa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
