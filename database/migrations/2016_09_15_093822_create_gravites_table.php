<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGravitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gravites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_gravite');
            $table->text('description_gravite');
            $table->string('class_color_gravite');
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
        Schema::drop('gravites');
    }
}
