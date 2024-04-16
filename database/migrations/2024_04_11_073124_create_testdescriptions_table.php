<<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('testdescriptions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('t_id');
            $table->foreign('t_id')->references('t_id')->on('descriptions')->onDelete('cascade');

            $table->unsignedBigInteger('img_id');
            $table->foreign('img_id')->references('id')->on('testdescriptions')->onDelete('cascade');


            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testdescriptions');
    }
};
