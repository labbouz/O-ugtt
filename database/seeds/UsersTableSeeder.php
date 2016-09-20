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

        $user = User::create([
            'name' => 'LABBOUZ Abdelmonam',
            'email' => 'labbouz@gmail.com',
            'password' => bcrypt('ccxccb01'),
            'role_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $user->assignRole('administrator');

        DB::table('profiles')->insert([
            'user_id' => $user->id,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }
}
