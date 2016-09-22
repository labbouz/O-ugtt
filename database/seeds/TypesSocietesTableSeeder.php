<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class TypesSocietesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete types_societes table records
        DB::table('types_societes')->truncate();

        DB::table('types_societes')->insert(array(
            array('nom_type_societe'=>trans('societe.type_societe_1'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_type_societe'=>trans('societe.type_societe_2'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_type_societe'=>trans('societe.type_societe_3'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_type_societe'=>trans('societe.type_societe_4'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
        ));


    }
}
