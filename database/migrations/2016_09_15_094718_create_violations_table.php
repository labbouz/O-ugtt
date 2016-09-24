<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViolationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('violations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_violation');
            $table->text('description_violation');
            $table->integer('type_violation_id')->unsigned();
            $table->foreign('type_violation_id')->references('id')->on('types_violations');
            $table->integer('gravite_id')->unsigned();
            $table->foreign('gravite_id')->references('id')->on('gravites');
            $table->string('class_color_violation');
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

        Schema::drop('violations');
        Schema::drop('gravites');
        Schema::drop('types_violations');
    }
}
