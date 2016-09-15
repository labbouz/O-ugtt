<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

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
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'name' => 'LABBOUZ Abdelmonam',
            'email' => 'labbouz@gmail.com',
            'password' => bcrypt('ccxccb01'),
            'is_admin' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
