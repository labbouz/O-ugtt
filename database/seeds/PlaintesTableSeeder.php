<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class PlaintesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete moves table records
        DB::table('plaintes')->truncate();
        //insert some dummy records
        DB::table('plaintes')->insert(array(
            array('nom_plainte'=>trans('plainte.plainte_1'), 'categorie_plainte'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_plainte'=>trans('plainte.plainte_2'), 'categorie_plainte'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_plainte'=>trans('plainte.plainte_3'), 'categorie_plainte'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),

            array('nom_plainte'=>trans('plainte.plainte_4'), 'categorie_plainte'=>2, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_plainte'=>trans('plainte.plainte_5'), 'categorie_plainte'=>2, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),

            array('nom_plainte'=>trans('plainte.plainte_6'), 'categorie_plainte'=>3, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),

            array('nom_plainte'=>trans('plainte.plainte_7'), 'categorie_plainte'=>4, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),

        ));
    }
}
