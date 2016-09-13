<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class SecteursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete secteurs table records
        DB::table('secteurs')->truncate();
        //insert some dummy records
        DB::table('secteurs')->insert(array(
            array('nom_secteur'=>trans('secteur.transport'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_secteur'=>trans('secteur.professions_et_services'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_secteur'=>trans('secteur.travaux'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_secteur'=>trans('secteur.petrole'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_secteur'=>trans('secteur.tissage'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_secteur'=>trans('secteur.sante'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_secteur'=>trans('secteur.pension_et_le_tourisme'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_secteur'=>trans('secteur.banques'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_secteur'=>trans('secteur.metaux_et_produits_electroniques'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_secteur'=>trans('secteur.communications'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),

        ));
    }
}
