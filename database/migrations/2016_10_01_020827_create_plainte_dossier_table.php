<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlainteDossierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossier_plainte', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('plainte_id')->unsigned();
            $table->foreign('plainte_id')->references('id')->on('plaintes');

            $table->integer('dossier_id')->unsigned();
            $table->foreign('dossier_id')->references('id')->on('dossiers');

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
        Schema::drop('dossier_plainte');
    }
}
