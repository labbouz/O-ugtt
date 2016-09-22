<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        Eloquent::unguard();

        //disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call('PermissionsTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('GouvernoratsTableSeeder');
        $this->call('DelegationsTableSeeder');
        $this->call('MovesTableSeeder');
        $this->call('SecteursTableSeeder');
        $this->call('StructuresSyndicalesTableSeeder');
        $this->call('TypesViolationsTableSeeder');
        $this->call('GravitesTableSeeder');
        $this->call('ViolationsTableSeeder');
        $this->call('TypesSocietesTableSeeder');


        // supposed to only apply to a single connection and reset it's self
        // but I like to explicitly undo what I've done for clarity
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
