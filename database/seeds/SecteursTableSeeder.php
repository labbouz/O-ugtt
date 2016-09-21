<?php

use Illuminate\Database\Seeder;

use App\Secteur;

use Carbon\Carbon;

use Kodeine\Acl\Models\Eloquent\Permission;
use Kodeine\Acl\Models\Eloquent\Role;

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


        $nombre_conventions = array(null,14,10,5,5,3,3,3,2,2,2,1,1);
        for($i=1;$i<=12;$i++) {

            $secteuradedd = Secteur::create([
                'nom_secteur' => trans('secteur.secteur_'.$i),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            /*
             * Insert Convetions
             */

            for($j=1;$j<=$nombre_conventions[$i];$j++) {
                $conventions['secteur_'.$i][] = array('nom_convention'=>trans('secteur.conventions_secteur_'.$i.'.convention_'.$j), 'secteur_id'=>$secteuradedd->id, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'));
            }
            DB::table('conventions')->insert( $conventions['secteur_'.$i] );


            /*
             * Creat permission
             */
            Permission::create([
                'name'        => 'secteur_'.$secteuradedd->id,
                'slug'        => [
                    'create'     => true,
                    'read'     => true,
                    'view'       => true,
                    'update'     => true,
                    'delete'     => true,
                ],
                'description' => trans('users.permission_secteur').' '.trans('secteur.secteur_'.$i)
            ]);

        }

    }
}
