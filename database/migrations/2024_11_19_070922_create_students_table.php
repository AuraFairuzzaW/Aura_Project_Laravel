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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('umur')->nullable();
            $table->string('kelas')->nullable();
            $table->unsignedBigInteger('guru_id');  // Define the foreign key column
            $table->foreign('guru_id')->references('id')->on('teachers');  // Foreign key constraint
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
