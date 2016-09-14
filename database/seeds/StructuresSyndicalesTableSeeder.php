<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class StructuresSyndicalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete Structures Syndicales table records
        DB::table('structures_syndicales')->truncate();
        //insert some dummy records
        DB::table('structures_syndicales')->insert(array(
            array('type_structure_syndicale'=>trans('syndicale.TypeStructureSyndicale_1'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('type_structure_syndicale'=>trans('syndicale.TypeStructureSyndicale_2'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('type_structure_syndicale'=>trans('syndicale.TypeStructureSyndicale_3'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('type_structure_syndicale'=>trans('syndicale.TypeStructureSyndicale_4'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('type_structure_syndicale'=>trans('syndicale.TypeStructureSyndicale_5'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('type_structure_syndicale'=>trans('syndicale.TypeStructureSyndicale_6'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('type_structure_syndicale'=>trans('syndicale.TypeStructureSyndicale_7'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('type_structure_syndicale'=>trans('syndicale.TypeStructureSyndicale_8'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('type_structure_syndicale'=>trans('syndicale.TypeStructureSyndicale_9'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('type_structure_syndicale'=>trans('syndicale.TypeStructureSyndicale_10'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('type_structure_syndicale'=>trans('syndicale.TypeStructureSyndicale_11'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('type_structure_syndicale'=>trans('syndicale.TypeStructureSyndicale_12'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s')),

        ));
    }
}
