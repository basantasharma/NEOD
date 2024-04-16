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
        Schema::create('descriptions', function (Blueprint $table) {
            $table->id('d_id');
            $table->unsignedBigInteger('countryDescription_id');
            $table->string('description');
            $table->unsignedBigInteger('v_id');
            $table->unsignedBigInteger('r_id');
            $table->string('sub_description')->nullable()->default(null);

            $table->unsignedBigInteger('t_id');

            $table->foreign('t_id')->references('d_id')->on('descriptions')->onDelete('cascade');
            $table->foreign('countryDescription_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('v_id')->references('id')->on('videos')->onDelete('cascade');
            $table->foreign('r_id')->references('id')->on('reads')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('descriptions');
    }
};
