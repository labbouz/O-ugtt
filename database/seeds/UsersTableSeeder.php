<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

use App\User;
use App\Profile;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete users table records
        DB::table('profiles')->truncate();
        DB::table('users')->truncate();

        /*
         * administrator
         */
        $user_administrator = User::create([
            'name' => 'USER Admin',
            'email' => 'admin@ugtt.tn',
            'password' => bcrypt('ccxccb01'),
            'role_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $user_administrator->assignRole('administrator');

        DB::table('profiles')->insert([
            'user_id' => $user_administrator->id,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        /*
         * observateur_regional
         */

        $user_observateur_regional = User::create([
            'name' => 'USER Observateur R',
            'email' => 'or@ugtt.tn',
            'password' => bcrypt('ccxccb01'),
            'role_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $user_observateur_regional->assignRole('observateur_regional');

        DB::table('profiles')->insert([
            'user_id' => $user_observateur_regional->id,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        /*
         * observateur_secteur
         */

        $user_observateur_secteur = User::create([
            'name' => 'USER Observateur S',
            'email' => 'os@ugtt.tn',
            'password' => bcrypt('ccxccb01'),
            'role_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $user_observateur_secteur->assignRole('observateur_secteur');

        DB::table('profiles')->insert([
            'user_id' => $user_observateur_secteur->id,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        /*
         * observateur
         */

        $user_observateur = User::create([
            'name' => 'USER Observateur',
            'email' => 'o@ugtt.tn',
            'password' => bcrypt('ccxccb01'),
            'role_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $user_observateur->assignRole('observateur');

        DB::table('profiles')->insert([
            'user_id' => $user_observateur->id,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }
}
