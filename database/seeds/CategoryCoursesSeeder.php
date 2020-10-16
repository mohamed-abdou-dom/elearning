<?php

use Illuminate\Database\Seeder;

class CategoryCoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_courses')->delete();
        DB::table('category_courses')->insert(array(
            array(
                'category_id' => 1,
                'course_id' => 1
            ),
            array(
                'category_id' => 1,
                'course_id' => 2
            ),
            array(
                'category_id' => 1,
                'course_id' => 3
            ),
            array(
                'category_id' => 1,
                'course_id' => 4
            ),
            array(
                'category_id' => 1,
                'course_id' => 5
            ),
            array(
                'category_id' => 1,
                'course_id' => 6
            ),
            array(
                'category_id' => 1,
                'course_id' => 7
            ),
            array(
                'category_id' => 1,
                'course_id' => 8
            ),
            array(
                'category_id' => 1,
                'course_id' => 9
            ),
            array(
                'category_id' => 1,
                'course_id' => 10
            ),
            array(
                'category_id' => 1,
                'course_id' => 11
            ),
            array(
                'category_id' => 1,
                'course_id' => 12
            ),
            array(
                'category_id' => 1,
                'course_id' => 13
            ),
            array(
                'category_id' => 1,
                'course_id' => 14
            ),
            array(
                'category_id' => 1,
                'course_id' => 15
            ),
            array(
                'category_id' => 1,
                'course_id' => 16
            ),
            array(
                'category_id' => 2,
                'course_id' => 17
            ),
            array(
                'category_id' => 2,
                'course_id' => 18
            ),
            array(
                'category_id' => 2,
                'course_id' => 19
            ),
            array(
                'category_id' => 2,
                'course_id' => 20
            ),
            array(
                'category_id' => 2,
                'course_id' => 21
            ),
            array(
                'category_id' => 2,
                'course_id' => 22
            ),
            array(
                'category_id' => 2,
                'course_id' => 23
            ),
            array(
                'category_id' => 2,
                'course_id' => 24
            ),
            array(
                'category_id' => 2,
                'course_id' => 25
            ),
            array(
                'category_id' => 2,
                'course_id' => 26
            ),
            array(
                'category_id' => 2,
                'course_id' => 1
            ),
            array(
                'category_id' => 2,
                'course_id' => 2
            ),
            array(
                'category_id' => 2,
                'course_id' => 3
            ),
            array(
                'category_id' => 2,
                'course_id' => 4
            ),
            array(
                'category_id' => 2,
                'course_id' => 5
            ),
            array(
                'category_id' => 3,
                'course_id' => 27
            ),
            array(
                'category_id' => 3,
                'course_id' => 28
            ),
            array(
                'category_id' => 3,
                'course_id' => 29
            ),
            array(
                'category_id' => 3,
                'course_id' => 30
            ),
            array(
                'category_id' => 3,
                'course_id' => 31
            ),
            array(
                'category_id' => 3,
                'course_id' => 32
            ),
            array(
                'category_id' => 3,
                'course_id' => 33
            ),
            array(
                'category_id' => 3,
                'course_id' => 34
            ),
            array(
                'category_id' => 3,
                'course_id' => 35
            )
        ));
    }
}
