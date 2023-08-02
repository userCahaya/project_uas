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
        Schema::create('katalog', function (Blueprint $table) {
            $table->integer('id_katalog_choirul');
            $table->string('nama_katalog_choirul', '45');
            $table->string('penerbit_choirul', '30');
            $table->string('pengarang_choirul', '30');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('katalog');
    }
};
