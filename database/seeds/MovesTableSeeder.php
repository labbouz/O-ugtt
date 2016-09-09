<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class MovesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete secteurs table records
        DB::table('moves')->delete();
        //insert some dummy records
        DB::table('moves')->insert(array(
            array('nom_move'=>trans('move.session_de_negociation'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_move'=>trans('move.travailleurs_reunion'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_move'=>trans('move.une_protestation'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_move'=>trans('move.pause_pour_travailler'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_move'=>trans('move.institution_d_exercice'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_move'=>trans('move.greve_du_secteur'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_move'=>trans('move.greve_regionale'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_move'=>trans('move.une_greve_generale'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_move'=>trans('move.sit_in'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_move'=>trans('move.greve_de_la_faim'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),

        ));
    }
}
