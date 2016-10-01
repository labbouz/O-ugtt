<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class MediasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete moves table records
        DB::table('medias')->truncate();
        //insert some dummy records
        DB::table('medias')->insert(array(
            array('nom_media'=>trans('media.move_media_local'), 'categorie_media'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_media'=>trans('media.move_media_regional'), 'categorie_media'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_media'=>trans('media.move_media_secteurs'), 'categorie_media'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_media'=>trans('media.move_media_national'), 'categorie_media'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),

            array('nom_media'=>trans('media.move_media_local'), 'categorie_media'=>2, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_media'=>trans('media.move_media_regional'), 'categorie_media'=>2, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_media'=>trans('media.move_media_central'), 'categorie_media'=>2, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),

            array('nom_media'=>trans('media.move_media_visible'), 'categorie_media'=>3, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_media'=>trans('media.move_media_audible'), 'categorie_media'=>3, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_media'=>trans('media.move_media_ecrit'), 'categorie_media'=>3, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),

            array('nom_media'=>trans('media.move_media_associations'), 'categorie_media'=>4, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_media'=>trans('media.move_media_organisations'), 'categorie_media'=>4, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('nom_media'=>trans('media.move_media_parties'), 'categorie_media'=>4, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
        ));
    }
}
