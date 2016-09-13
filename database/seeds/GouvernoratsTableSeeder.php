<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class GouvernoratsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete gouvernorats table records
        DB::table('gouvernorats')->truncate();
        //insert some dummy records
        DB::table('gouvernorats')->insert(array(
            array('nom_gouvernorat'=>trans('gouvernorats.Ariana'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gouvernorat'=>trans('gouvernorats.Beja'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gouvernorat'=>trans('gouvernorats.Ben_Arous'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gouvernorat'=>trans('gouvernorats.Bizerte'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gouvernorat'=>trans('gouvernorats.Gabes'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gouvernorat'=>trans('gouvernorats.Gafsa'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gouvernorat'=>trans('gouvernorats.Jendouba'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gouvernorat'=>trans('gouvernorats.Kairouan'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gouvernorat'=>trans('gouvernorats.Kasserine'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gouvernorat'=>trans('gouvernorats.Kebili'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gouvernorat'=>trans('gouvernorats.La_Manouba'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gouvernorat'=>trans('gouvernorats.Le_Kef'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gouvernorat'=>trans('gouvernorats.Mahdia'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gouvernorat'=>trans('gouvernorats.Medenine'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gouvernorat'=>trans('gouvernorats.Monastir'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gouvernorat'=>trans('gouvernorats.Nabeul'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gouvernorat'=>trans('gouvernorats.Sfax'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gouvernorat'=>trans('gouvernorats.Sidi_Bouzid'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gouvernorat'=>trans('gouvernorats.Siliana'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gouvernorat'=>trans('gouvernorats.Sousse'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gouvernorat'=>trans('gouvernorats.Tataouine'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gouvernorat'=>trans('gouvernorats.Tozeur'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gouvernorat'=>trans('gouvernorats.Tunis'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_gouvernorat'=>trans('gouvernorats.Zaghouan'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),

        ));
    }
}
