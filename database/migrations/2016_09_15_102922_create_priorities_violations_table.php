<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrioritiesViolationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('violations', function($table){
            $table->foreign('type_violationt_id')->references('id')->on('types_violations');
        });

        Schema::table('violations', function($table){
            $table->foreign('gravite_id')->references('id')->on('gravites');
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
        Schema::drop('types_violations');
        Schema::drop('gravites');
    }
}
