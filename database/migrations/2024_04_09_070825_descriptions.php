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
            $table->string('sub_description')->nullable()->default(null);
            $table->foreign('countryDescription_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('v_id')->references('id')->on('videos')->onDelete('cascade');

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
