<?php

use Illuminate\Database\Seeder;

class InstitutesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('institutes')->delete();

        \DB::table('institutes')->insert(array (
            0 =>
            array (
                'id' => 1,
                'admin_id' => 1,
                'name' => 'Tuition1',
                'tuition_type' => 'Private',
                'board_type' => 'CBSE',
                'class_from' => '1',
                'class_to' => '12',
                'email' => 'tutor1@tutorpad.com',
                'phone' => '9427384477',
                'mobile' => '8974651289',
                'image' => 'Not Provided',
                'address' => '987  Paradise arcade, London Street',
                'location' => 'Bodakdev',
                'description' => 'This is the best coaching classes. Come, we\'ll make you the worse and the best student at the same time because CBSE believes in all round development.',
                'created_at' => '2018-05-13 16:25:14',
                'updated_at' => '2018-05-13 16:25:14',
            ),
            1 =>
            array (
                'id' => 2,
                'admin_id' => 1,
                'name' => 'Tutorial',
                'tuition_type' => 'Group',
                'board_type' => 'ICSE',
                'class_from' => '1',
                'class_to' => '10',
                'email' => 'tutorshailendra@tutorpad.com',
                'phone' => '8974651289',
                'mobile' => '9876543212',
                'image' => 'Not Provided',
                'address' => '987  Paradise arcade, London Street',
                'location' => 'Bopal',
                'description' => 'We make elegant students, english more english and all english. Decency, manners, money, sometimes show off. yeah, we are ICSE people!',
                'created_at' => '2018-05-13 16:27:08',
                'updated_at' => '2018-05-13 16:27:08',
            ),
            2 =>
            array (
                'id' => 3,
                'admin_id' => 1,
                'name' => 'Tuition2',
                'tuition_type' => 'Group',
                'board_type' => 'GSEB',
                'class_from' => '1',
                'class_to' => '12',
                'email' => 'tutor2@tutorpad.com',
                'phone' => '8974651289',
                'mobile' => '9876543212',
                'image' => 'Not Provided',
                'address' => '987  Paradise arcade, London Street',
                'location' => 'Bapunagar',
                'description' => 'We have the best business oriented mind aur maine saal bhar ki english ek saath boldi hai. Ab hindi bhi soory ho en thi vadhare nathi avadtu pan pde to evaj chhe!',
                'created_at' => '2018-05-13 16:29:22',
                'updated_at' => '2018-05-13 16:29:22',
            ),
            3 =>
            array (
                'id' => 4,
                'admin_id' => 1,
                'name' => 'Tuition3',
                'tuition_type' => 'Private',
                'board_type' => 'CBSE',
                'class_from' => '1',
                'class_to' => '7',
                'email' => 'napster@tutorpad.com',
                'phone' => '8974651289',
                'mobile' => '9876543212',
                'image' => 'Not Provided',
                'address' => '987  Paradise arcade, London Street',
                'location' => 'Chandkheda',
                'description' => 'TutorPad is a one stop solution for Tuition classes. TutorPad is awesome. Add some nice description.',
                'created_at' => '2018-05-13 17:08:57',
                'updated_at' => '2018-05-13 17:08:57',
            ),
        ));
    }
}