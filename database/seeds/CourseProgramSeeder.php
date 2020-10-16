<?php

use Illuminate\Database\Seeder;

class CourseProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_program')->delete();
        DB::table('course_program')->insert(array(
            array(
                'program_id' => 1,
                'course_id' => 6,
                'order' => 1
            ),
            array(
                'program_id' => 1,
                'course_id' => 7,
                'order' => 2
            ),
            array(
                'program_id' => 1,
                'course_id' => 8,
                'order' => 3
            ),
            array(
                'program_id' => 2,
                'course_id' => 10,
                'order' => 1
            ),
            array(
                'program_id' => 2,
                'course_id' => 11,
                'order' => 2
            ),
            array(
                'program_id' => 2,
                'course_id' => 12,
                'order' => 3
            ),
            array(
                'program_id' => 3,
                'course_id' => 1,
                'order' => 1
            ),
            array(
                'program_id' => 3,
                'course_id' => 2,
                'order' => 2
            ),
            array(
                'program_id' => 3,
                'course_id' => 3,
                'order' => 3
            ),
            array(
                'program_id' => 3,
                'course_id' => 4,
                'order' => 4
            ),
            array(
                'program_id' => 3,
                'course_id' => 5,
                'order' => 5
            ),
            array(
                'program_id' => 3,
                'course_id' => 6,
                'order' => 6
            ),
            array(
                'program_id' => 3,
                'course_id' => 7,
                'order' => 7
            ),
            array(
                'program_id' => 3,
                'course_id' => 8,
                'order' => 8
            ),
            array(
                'program_id' => 3,
                'course_id' => 9,
                'order' => 9
            ),
            array(
                'program_id' => 4,
                'course_id' => 1,
                'order' => 1
            ),
            array(
                'program_id' => 4,
                'course_id' => 2,
                'order' => 2
            ),
            array(
                'program_id' => 4,
                'course_id' => 3,
                'order' => 3
            ),
            array(
                'program_id' => 4,
                'course_id' => 13,
                'order' => 4
            ),
            array(
                'program_id' => 4,
                'course_id' => 14,
                'order' => 5
            ),
            array(
                'program_id' => 4,
                'course_id' => 15,
                'order' => 6
            ),
            array(
                'program_id' => 4,
                'course_id' => 16,
                'order' => 7
            ),
            array(
                'program_id' => 5,
                'course_id' => 17,
                'order' => 1
            ),
            array(
                'program_id' => 5,
                'course_id' => 18,
                'order' => 2
            ),
            array(
                'program_id' => 5,
                'course_id' => 19,
                'order' => 3
            ),
            array(
                'program_id' => 5,
                'course_id' => 20,
                'order' => 4
            ),
            array(
                'program_id' => 5,
                'course_id' => 21,
                'order' => 5
            ),
            array(
                'program_id' => 5,
                'course_id' => 22,
                'order' => 6
            ),
            array(
                'program_id' => 6,
                'course_id' => 23,
                'order' => 1
            ),
            array(
                'program_id' => 6,
                'course_id' => 24,
                'order' => 2
            ),
            array(
                'program_id' => 6,
                'course_id' => 25,
                'order' => 3
            ),
            array(
                'program_id' => 6,
                'course_id' => 26,
                'order' => 4
            ),
            array(
                'program_id' => 7,
                'course_id' => 1,
                'order' => 1
            ),
            array(
                'program_id' => 7,
                'course_id' => 2,
                'order' => 2
            ),
            array(
                'program_id' => 7,
                'course_id' => 3,
                'order' => 3
            ),
            array(
                'program_id' => 7,
                'course_id' => 4,
                'order' => 4
            ),
            array(
                'program_id' => 7,
                'course_id' => 5,
                'order' => 5
            ),
            array(
                'program_id' => 8,
                'course_id' => 27,
                'order' => 1
            ),
            array(
                'program_id' => 8,
                'course_id' => 28,
                'order' => 2
            ),
            array(
                'program_id' => 8,
                'course_id' => 29,
                'order' => 3
            ),
            array(
                'program_id' => 8,
                'course_id' => 30,
                'order' => 4
            ),
            array(
                'program_id' => 9,
                'course_id' => 31,
                'order' => 1
            ),
            array(
                'program_id' => 9,
                'course_id' => 32,
                'order' => 2
            ),
            array(
                'program_id' => 9,
                'course_id' => 33,
                'order' => 3
            ),
            array(
                'program_id' => 9,
                'course_id' => 34,
                'order' => 4
            ),
            array(
                'program_id' => 9,
                'course_id' => 35,
                'order' => 5
            )
        ));
    }
}
