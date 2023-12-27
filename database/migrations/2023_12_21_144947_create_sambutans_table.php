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
        Schema::create('sambutans', function (Blueprint $table) {
            $table->id();
            $table->string('judul_sambutan');
            $table->string('foto_sambutan');
            $table->text('isi_sambutan');
            $table->string('foto_sejarah');
            $table->text('isi_sejarah');
            $table->text('visi');
            $table->text('misi');
            $table->text('program_kerja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sambutans');
    }
};
