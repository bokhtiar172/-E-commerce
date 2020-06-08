<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //this is admin area
        DB::table('users')->insert([
            "name"=>'admin',
            "role_id"=>1,
            "email"=>'bokhtiartoshar1@gmail.com',
            "password"=>bcrypt('abbuammmu')
        ]);

        //this is user area
        DB::table('users')->insert([
            "name"=>'user',
            "role_id"=>2,
            "email"=>'provatermridhoalo@gmail.com',
            "password"=>bcrypt(12345678)
        ]);
    }
}
