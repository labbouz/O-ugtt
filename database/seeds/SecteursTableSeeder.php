<?php

use Illuminate\Database\Seeder;

use App\Secteur;

use Carbon\Carbon;

use Kodeine\Acl\Models\Eloquent\Permission;

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

        for($i=1;$i<=10;$i++) {

            $secteuradedd = Secteur::create([
                'nom_secteur' => trans('secteur.secteur_'.$i),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            Permission::create([
                'name'        => 'secteur_'.$secteuradedd->id,
                'slug'        => [
                    'create'     => true,
                    'view'       => true,
                    'update'     => true,
                    'delete'     => false,
                ],
                'description' => trans('users.permission_secteur').' '.trans('secteur.secteur_'.$i)
            ]);

        }

    }
}
