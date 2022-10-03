<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campings', function (Blueprint $table) {
            $table->id();
            $table->string('camp_name');
            $table->string('camp_image1');
            $table->string('camp_image2')->nullable();
            $table->string('camp_image3')->nullable();
            $table->string('camp_desc');
            $table->decimal('camp_prix',8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campings');
    }
};
