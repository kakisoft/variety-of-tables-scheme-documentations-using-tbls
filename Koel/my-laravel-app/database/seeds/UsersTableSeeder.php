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
        //-----< SP User >-----
        DB::table('users')->where('name', '=', 'kakisoft')->delete();
        DB::table('users')->insert([
            [
                'name' => 'kakisoft',
                'email' => 'foobar@gmail.com',
                'password' => bcrypt('secret'),
            ]
        ]);

        //-----< Normal User >-----
        DB::table('users')->insert([
            [
                'name' => str_random(10),
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('secret'),
            ]
            ,[
                'name' => str_random(10),
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('secret'),
            ],
        ]);
    }
}
