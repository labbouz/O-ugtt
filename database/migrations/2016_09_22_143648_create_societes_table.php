<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocietesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_societe');
            $table->integer('type_societe_id')->unsigned();
            $table->foreign('type_societe_id')->references('id')->on('types_societes');
            $table->integer('gouvernorat_id')->unsigned();
            $table->foreign('gouvernorat_id')->references('id')->on('gouvernorats');
            $table->integer('delegation_id')->unsigned();
            $table->foreign('delegation_id')->references('id')->on('delegations');
            $table->integer('secteur_id')->unsigned();
            $table->foreign('secteur_id')->references('id')->on('secteurs');
            $table->integer('convention_id')->unsigned();
            $table->foreign('convention_id')->references('id')->on('conventions');
            $table->integer('nombre_travailleurs');
            $table->tinyInteger('cdi');
            $table->date('date_cration_societe');
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
        Schema::drop('societes');
    }
}
