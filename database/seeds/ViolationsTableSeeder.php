<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class ViolationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete gravites table records
        DB::table('violations')->truncate();


        $violations = array();

        $type_violation_id = DB::table('types_violations')->where('nom_type_violation', trans('violations.type_violation_1'))->value('id');
        for($i=1;$i<=12;$i++) {
            $violations['individuelle'][] = array('nom_violation'=>trans('violations.violation_individuelle_'.$i), 'type_violationt_id'=>$type_violation_id, 'gravite_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'));
        }
        DB::table('violations')->insert( $violations['individuelle'] );

        $type_violation_id = DB::table('types_violations')->where('nom_type_violation', trans('violations.type_violation_2'))->value('id');
        for($i=1;$i<=11;$i++) {
            $violations['massives'][] = array('nom_violation'=>trans('violations.violation_massives_'.$i), 'type_violationt_id'=>$type_violation_id, 'gravite_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'));
        }
        DB::table('violations')->insert( $violations['massives'] );

    }
}
