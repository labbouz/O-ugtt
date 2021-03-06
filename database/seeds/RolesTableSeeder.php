<?php

use Illuminate\Database\Seeder;

//use Kodeine\Acl\Models\Eloquent\Permission;
use Kodeine\Acl\Models\Eloquent\Role;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $role = new Role();
        $roleAdmin = $role->create([
            'name' => trans('users.role_admin'),
            'slug' => 'administrator',
            'description' => trans('users.desc_role_admin'),
            'class_color' => 'danger'
        ]);

        //$roleAdmin->assignPermission('config');

        $role = new Role();
        $role->create([
            'name' => trans('users.role_observateur_regional'),
            'slug' => 'observateur_regional',
            'description' => trans('users.desc_role_observateur_regional'),
            'class_color' => 'info'
        ]);

        $role = new Role();
        $role->create([
            'name' => trans('users.role_observateur_secteur'),
            'slug' => 'observateur_secteur',
            'description' => trans('users.desc_role_observateur_secteur'),
            'class_color' => 'warning'
        ]);

        $role = new Role();
        $role->create([
            'name' => trans('users.role_observateur'),
            'slug' => 'observateur',
            'description' => trans('users.desc_role_observateur'),
            'class_color' => 'success'
        ]);

    }
}
