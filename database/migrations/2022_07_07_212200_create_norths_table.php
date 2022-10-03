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
        Schema::create('norths', function (Blueprint $table) {
            $table->id();
            $table->string('titre_trajet');
            $table->string('image_trajet');
            $table->string('desc_trajet');
            $table->string('camp1_name');
            $table->string('camp1_image');
            $table->string('camp1_desc');
            $table->decimal('camp1_prix',8,2);
            $table->string('camp2_name')->nullable();
            $table->string('camp2_image')->nullable();
            $table->string('camp2_desc')->nullable();
            $table->decimal('camp2_prix',8,2)->nullable();
            $table->string('transport_trajet')->nullable();
            $table->string('type_trajet');
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
        Schema::dropIfExists('norths');
    }
};
