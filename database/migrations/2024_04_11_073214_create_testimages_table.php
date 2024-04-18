<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('testimages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('img_id');
            $table->foreign('img_id')->references('d_id')->on('descriptions')->onDelete('cascade');
            $table->string('images');
            // $table->enum('exam', ["ielts", "pte", "sat", "gre"]);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimages');
    }
};
