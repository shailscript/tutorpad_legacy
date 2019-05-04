<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Tutor Shailendra Shukla',
                'email' => 'tutorshailendra@tutorpad.com',
                'password' => '$2y$10$UKRJufBRqdOvXksqLKKNV.5QFZkF35/nc7AxfOTfRa5bFvLHT/hj2', //password
                'remember_token' => NULL,
                'created_at' => '2018-05-13 16:23:39',
                'updated_at' => '2018-05-13 16:23:39',
            ),
        ));
    }
}