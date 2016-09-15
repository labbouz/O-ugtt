<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class GravitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete gravites table records
        DB::table('gravites')->truncate();
        //insert some dummy records
        DB::table('gravites')->insert(array(
            array('nom_gravite'=>trans('violations.nom_gravite_1'), 'description_gravite'=>trans('violations.desc_gravite_1'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gravite'=>trans('violations.nom_gravite_2'), 'description_gravite'=>trans('violations.desc_gravite_2'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),

        ));
    }
}
