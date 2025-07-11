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
        Schema::create('perpuses', function (Blueprint $table) {
            $table->id(); // ✅ BENAR (alias dari bigIncrements('id'))
            $table->string('judul');
            $table->string('penulis', 100);
            $table->integer('tahunterbit');
            $table->string('penerbit', 100);
            $table->string('kategori', 100);
            $table->string('foto')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perpuses');
    }
};
