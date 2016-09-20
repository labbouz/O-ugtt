<?php

use Illuminate\Database\Seeder;

use Kodeine\Acl\Models\Eloquent\Permission;
use Kodeine\Acl\Models\Eloquent\Role;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = new Permission();
        $permission->create([
            'name'        => 'config',
            'slug'        => [          // pass an array of permissions.
                'create'     => true,
                'view'       => true,
                'update'     => true,
                'delete'     => true
            ],
            'description' => 'manage config  permissions'
        ]);

    }
}
