<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('reviews')->delete();
        
        \DB::table('reviews')->insert(array (
            0 => 
            array (
                'id' => 1,
                'institute_id' => 1,
                'name' => 'Student one',
                'email' => 'student1@app.com',
                'edu' => 5,
                'infra' => 5,
                'faculty' => 5,
                'review' => 'This an awesome comment.',
                'created_at' => '2018-05-13 16:48:41',
                'updated_at' => '2018-05-13 16:48:41',
            ),
            1 => 
            array (
                'id' => 2,
                'institute_id' => 1,
                'name' => 'Student two',
                'email' => 'stduent2@app.com',
                'edu' => 5,
                'infra' => 5,
                'faculty' => 5,
                'review' => 'This is another comment',
                'created_at' => '2018-05-13 16:51:36',
                'updated_at' => '2018-05-13 16:51:36',
            ),
            2 => 
            array (
                'id' => 3,
                'institute_id' => 1,
                'name' => 'Tutor One',
                'email' => 'tutor1@app.com',
                'edu' => 5,
                'infra' => 5,
                'faculty' => 5,
                'review' => 'Other tutors can also comment here.',
                'created_at' => '2018-05-13 16:52:26',
                'updated_at' => '2018-05-13 16:52:26',
            ),
            3 => 
            array (
                'id' => 4,
                'institute_id' => 1,
                'name' => 'Tutor two',
                'email' => 'tutor2@app.com',
                'edu' => 5,
                'infra' => 5,
                'faculty' => 5,
                'review' => 'Anyione who is logged in cam comment but not the guests',
                'created_at' => '2018-05-13 16:53:31',
                'updated_at' => '2018-05-13 16:53:31',
            ),
        ));  
    }
}