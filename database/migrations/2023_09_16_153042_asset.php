<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('asset', function (Blueprint $table) {
            $table->id();
            $table->string('favicon')->nullable();
            $table->string('name_loket_a')->nullable();
            $table->string('name_loket_b')->nullable();
            $table->string('name_loket_c')->nullable();
            $table->string('name_loket_d')->nullable();
            $table->string('name_loket_e')->nullable();
            $table->string('name_loket_f')->nullable();
            $table->string('main_title')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asset');
    }
};
