<?php

use Illuminate\Database\Seeder;
use App\Models\Question01RegistrationInformation;

class Question01RegistrationInformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //-----< SP Data >-----
        DB::table('question01_registration_informations')->where('name', '=', 'kakisoft')->delete();
        DB::table('question01_registration_informations')->insert([
            [
                'name' => 'kakisoft',
                'email' => 'foo@gmail.com',
                'for_regist_token' => '1234567890',
                'comment' => 'for_test_message_01',
                'is_cleared' => Question01RegistrationInformation::IS_CLEARED___TRUE,
            ]
        ]);

        DB::table('question01_registration_informations')->where('name', '=', 'Tom')->delete();
        DB::table('question01_registration_informations')->insert([
            [
                'name' => 'Tom',
                'email' => 'bar@gmail.com',
                'for_regist_token' => '0123456789',
                'comment' => '',
                'is_cleared' => Question01RegistrationInformation::IS_CLEARED___FALSE,
            ]
        ]);

        //-----< Normal Data >-----
        // Cleard User 
        DB::table('question01_registration_informations')->insert([
            [
                'name'             => 'Kaitlin',
                'email'            => str_random(10).'@gmail.com',
                'for_regist_token' => str_random(10),
                'comment'          => 'clear comment 01',
                'is_cleared'       => Question01RegistrationInformation::IS_CLEARED___TRUE,
            ]
            ,[
                'name'             => 'Chantelle',
                'email'            => str_random(10).'@gmail.com',
                'for_regist_token' => str_random(10),
                'comment'          => 'clear comment 02',
                'is_cleared'       => Question01RegistrationInformation::IS_CLEARED___TRUE,
            ]
            ,[
                'name'             => 'Joel',
                'email'            => str_random(10).'@gmail.com',
                'for_regist_token' => str_random(10),
                'comment'          => 'clear comment 03',
                'is_cleared'       => Question01RegistrationInformation::IS_CLEARED___TRUE,
            ]
            ,[
                'name'             => 'Gabriella',
                'email'            => str_random(10).'@gmail.com',
                'for_regist_token' => str_random(10),
                'comment'          => 'clear comment 04',
                'is_cleared'       => Question01RegistrationInformation::IS_CLEARED___TRUE,
            ]
            ,[
                'name'             => 'Violet',
                'email'            => str_random(10).'@gmail.com',
                'for_regist_token' => str_random(10),
                'comment'          => 'clear comment 05',
                'is_cleared'       => Question01RegistrationInformation::IS_CLEARED___TRUE,
            ]
        ]);


        // UnCleard User
        DB::table('question01_registration_informations')->insert([
            [
                'name'             => str_random(10),
                'email'            => str_random(10).'@gmail.com',
                'for_regist_token' => null,
                'comment'          => '',
                'is_cleared'       => Question01RegistrationInformation::IS_CLEARED___FALSE,
            ]
        ]);

    }
}
