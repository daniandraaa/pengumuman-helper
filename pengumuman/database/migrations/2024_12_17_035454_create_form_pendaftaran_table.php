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
        Schema::create('form_pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('ktm');
            $table->string('domisili');
            $table->string('nim');
            $table->string('cv')->nullable();
            $table->string('jurusan');
            $table->string('keahlian');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_pendaftaran');
    }
};
