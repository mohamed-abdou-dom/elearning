<?php

use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->delete();
        DB::table('lessons')->insert(array(
            array(
                'lesson_name'        => 'html lesson one',
                'lesson_description' => 'this is description for html lesson one',
                'lesson_slug'        => 'html-lesson-one',
                'lesson_image'       => 'html-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 1,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'html lesson two',
                'lesson_description' => 'this is description for html lesson two',
                'lesson_slug'        => 'html-lesson-two',
                'lesson_image'       => 'html-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 1,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'html lesson three',
                'lesson_description' => 'this is description for html lesson three',
                'lesson_slug'        => 'html-lesson-three',
                'lesson_image'       => 'html-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 1,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'html lesson four',
                'lesson_description' => 'this is description for html lesson four',
                'lesson_slug'        => 'html-lesson-four',
                'lesson_image'       => 'html-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 1,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'html lesson five',
                'lesson_description' => 'this is description for html lesson five',
                'lesson_slug'        => 'html-lesson-five',
                'lesson_image'       => 'html-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 1,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'html lesson six',
                'lesson_description' => 'this is description for html lesson six',
                'lesson_slug'        => 'html-lesson-six',
                'lesson_image'       => 'html-lesson-six.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 1,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'html lesson seven',
                'lesson_description' => 'this is description for html lesson seven',
                'lesson_slug'        => 'html-lesson-seven',
                'lesson_image'       => 'html-lesson-seven.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 1,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'html lesson eight',
                'lesson_description' => 'this is description for html lesson eight',
                'lesson_slug'        => 'html-lesson-eight',
                'lesson_image'       => 'html-lesson-eight.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 1,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'html lesson nine',
                'lesson_description' => 'this is description for html lesson nine',
                'lesson_slug'        => 'html-lesson-nine',
                'lesson_image'       => 'html-lesson-nine.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 1,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'html lesson ten',
                'lesson_description' => 'this is description for html lesson ten',
                'lesson_slug'        => 'html-lesson-ten',
                'lesson_image'       => 'html-lesson-ten.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 1,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'html lesson eleven',
                'lesson_description' => 'this is description for html lesson eleven',
                'lesson_slug'        => 'html-lesson-eleven',
                'lesson_image'       => 'html-lesson-eleven.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 1,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'css lesson one',
                'lesson_description' => 'this is description for css lesson one',
                'lesson_slug'        => 'css-lesson-one',
                'lesson_image'       => 'css-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 2,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'css lesson two',
                'lesson_description' => 'this is description for css lesson two',
                'lesson_slug'        => 'css-lesson-two',
                'lesson_image'       => 'css-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 2,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'css lesson three',
                'lesson_description' => 'this is description for css lesson three',
                'lesson_slug'        => 'css-lesson-three',
                'lesson_image'       => 'css-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 2,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'css lesson four',
                'lesson_description' => 'this is description for css lesson four',
                'lesson_slug'        => 'css-lesson-four',
                'lesson_image'       => 'css-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 2,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'css lesson five',
                'lesson_description' => 'this is description for css lesson five',
                'lesson_slug'        => 'css-lesson-five',
                'lesson_image'       => 'css-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 2,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'css lesson six',
                'lesson_description' => 'this is description for css lesson six',
                'lesson_slug'        => 'css-lesson-six',
                'lesson_image'       => 'css-lesson-six.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 2,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'css lesson seven',
                'lesson_description' => 'this is description for css lesson seven',
                'lesson_slug'        => 'css-lesson-seven',
                'lesson_image'       => 'css-lesson-seven.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 2,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'css lesson eight',
                'lesson_description' => 'this is description for css lesson eight',
                'lesson_slug'        => 'css-lesson-eight',
                'lesson_image'       => 'css-lesson-eight.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 2,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'css lesson nine',
                'lesson_description' => 'this is description for css lesson nine',
                'lesson_slug'        => 'css-lesson-nine',
                'lesson_image'       => 'css-lesson-nine.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 2,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'javascript lesson one',
                'lesson_description' => 'this is description for javascript lesson one',
                'lesson_slug'        => 'javascript-lesson-one',
                'lesson_image'       => 'javascript-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 3,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'javascript lesson two',
                'lesson_description' => 'this is description for javascript lesson two',
                'lesson_slug'        => 'javascript-lesson-two',
                'lesson_image'       => 'javascript-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 3,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'javascript lesson three',
                'lesson_description' => 'this is description for javascript lesson three',
                'lesson_slug'        => 'javascript-lesson-three',
                'lesson_image'       => 'javascript-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 3,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'javascript lesson four',
                'lesson_description' => 'this is description for javascript lesson four',
                'lesson_slug'        => 'javascript-lesson-four',
                'lesson_image'       => 'javascript-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 3,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'javascript lesson five',
                'lesson_description' => 'this is description for javascript lesson five',
                'lesson_slug'        => 'javascript-lesson-five',
                'lesson_image'       => 'javascript-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 3,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'javascript lesson six',
                'lesson_description' => 'this is description for javascript lesson six',
                'lesson_slug'        => 'javascript-lesson-six',
                'lesson_image'       => 'javascript-lesson-six.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 3,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'javascript lesson seven',
                'lesson_description' => 'this is description for javascript lesson seven',
                'lesson_slug'        => 'javascript-lesson-seven',
                'lesson_image'       => 'javascript-lesson-seven.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 3,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'javascript lesson eight',
                'lesson_description' => 'this is description for javascript lesson eight',
                'lesson_slug'        => 'javascript-lesson-eight',
                'lesson_image'       => 'javascript-lesson-eight.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 3,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'javascript lesson nine',
                'lesson_description' => 'this is description for javascript lesson nine',
                'lesson_slug'        => 'javascript-lesson-nine',
                'lesson_image'       => 'javascript-lesson-nine.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 3,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'javascript lesson ten',
                'lesson_description' => 'this is description for javascript lesson ten',
                'lesson_slug'        => 'javascript-lesson-ten',
                'lesson_image'       => 'javascript-lesson-ten.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 3,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'jquery lesson one',
                'lesson_description' => 'this is description for jquery lesson one',
                'lesson_slug'        => 'jquery-lesson-one',
                'lesson_image'       => 'jquery-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 4,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'jquery lesson two',
                'lesson_description' => 'this is description for jquery lesson two',
                'lesson_slug'        => 'jquery-lesson-two',
                'lesson_image'       => 'jquery-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 4,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'jquery lesson three',
                'lesson_description' => 'this is description for jquery lesson three',
                'lesson_slug'        => 'jquery-lesson-three',
                'lesson_image'       => 'jquery-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 4,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'jquery lesson four',
                'lesson_description' => 'this is description for jquery lesson four',
                'lesson_slug'        => 'jquery-lesson-four',
                'lesson_image'       => 'jquery-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 4,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'jquery lesson five',
                'lesson_description' => 'this is description for jquery lesson five',
                'lesson_slug'        => 'jquery-lesson-five',
                'lesson_image'       => 'jquery-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 4,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'bootstrap lesson one',
                'lesson_description' => 'this is description for bootstrap lesson one',
                'lesson_slug'        => 'bootstrap-lesson-one',
                'lesson_image'       => 'bootstrap-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 5,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'bootstrap lesson two',
                'lesson_description' => 'this is description for bootstrap lesson two',
                'lesson_slug'        => 'bootstrap-lesson-two',
                'lesson_image'       => 'bootstrap-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 5,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'bootstrap lesson three',
                'lesson_description' => 'this is description for bootstrap lesson three',
                'lesson_slug'        => 'bootstrap-lesson-three',
                'lesson_image'       => 'bootstrap-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 5,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'bootstrap lesson four',
                'lesson_description' => 'this is description for bootstrap lesson four',
                'lesson_slug'        => 'bootstrap-lesson-four',
                'lesson_image'       => 'bootstrap-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 5,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'bootstrap lesson five',
                'lesson_description' => 'this is description for bootstrap lesson five',
                'lesson_slug'        => 'bootstrap-lesson-five',
                'lesson_image'       => 'bootstrap-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 5,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'bootstrap lesson six',
                'lesson_description' => 'this is description for bootstrap lesson six',
                'lesson_slug'        => 'bootstrap-lesson-six',
                'lesson_image'       => 'bootstrap-lesson-six.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 5,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'bootstrap lesson seven',
                'lesson_description' => 'this is description for bootstrap lesson seven',
                'lesson_slug'        => 'bootstrap-lesson-seven',
                'lesson_image'       => 'bootstrap-lesson-seven.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 5,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'php lesson one',
                'lesson_description' => 'this is description for php lesson one',
                'lesson_slug'        => 'php-lesson-one',
                'lesson_image'       => 'php-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 6,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'php lesson two',
                'lesson_description' => 'this is description for php lesson two',
                'lesson_slug'        => 'php-lesson-two',
                'lesson_image'       => 'php-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 6,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'php lesson three',
                'lesson_description' => 'this is description for php lesson three',
                'lesson_slug'        => 'php-lesson-three',
                'lesson_image'       => 'php-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 6,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'php lesson four',
                'lesson_description' => 'this is description for php lesson four',
                'lesson_slug'        => 'php-lesson-four',
                'lesson_image'       => 'php-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 6,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'php lesson five',
                'lesson_description' => 'this is description for php lesson five',
                'lesson_slug'        => 'php-lesson-five',
                'lesson_image'       => 'php-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 6,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'php lesson six',
                'lesson_description' => 'this is description for php lesson six',
                'lesson_slug'        => 'php-lesson-six',
                'lesson_image'       => 'php-lesson-six.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 6,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'php lesson seven',
                'lesson_description' => 'this is description for php lesson seven',
                'lesson_slug'        => 'php-lesson-seven',
                'lesson_image'       => 'php-lesson-seven.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 6,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'php lesson eight',
                'lesson_description' => 'this is description for php lesson eight',
                'lesson_slug'        => 'php-lesson-eight',
                'lesson_image'       => 'php-lesson-eight.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 6,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'php lesson nine',
                'lesson_description' => 'this is description for php lesson nine',
                'lesson_slug'        => 'php-lesson-nine',
                'lesson_image'       => 'php-lesson-nine.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 6,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'php lesson ten',
                'lesson_description' => 'this is description for php lesson ten',
                'lesson_slug'        => 'php-lesson-ten',
                'lesson_image'       => 'php-lesson-ten.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 6,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'php lesson eleven',
                'lesson_description' => 'this is description for php lesson eleven',
                'lesson_slug'        => 'php-lesson-eleven',
                'lesson_image'       => 'php-lesson-eleven.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 6,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'mysql lesson one',
                'lesson_description' => 'this is description for mysql lesson one',
                'lesson_slug'        => 'mysql-lesson-one',
                'lesson_image'       => 'mysql-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 7,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'mysql lesson two',
                'lesson_description' => 'this is description for mysql lesson two',
                'lesson_slug'        => 'mysql-lesson-two',
                'lesson_image'       => 'mysql-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 7,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'mysql lesson three',
                'lesson_description' => 'this is description for mysql lesson three',
                'lesson_slug'        => 'mysql-lesson-three',
                'lesson_image'       => 'mysql-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 7,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'mysql lesson four',
                'lesson_description' => 'this is description for mysql lesson four',
                'lesson_slug'        => 'mysql-lesson-four',
                'lesson_image'       => 'mysql-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 7,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'mysql lesson five',
                'lesson_description' => 'this is description for mysql lesson five',
                'lesson_slug'        => 'mysql-lesson-five',
                'lesson_image'       => 'mysql-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 7,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'mysql lesson six',
                'lesson_description' => 'this is description for mysql lesson six',
                'lesson_slug'        => 'mysql-lesson-six',
                'lesson_image'       => 'mysql-lesson-six.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 7,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'mysql lesson seven',
                'lesson_description' => 'this is description for mysql lesson seven',
                'lesson_slug'        => 'mysql-lesson-seven',
                'lesson_image'       => 'mysql-lesson-seven.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 7,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'mysql lesson eight',
                'lesson_description' => 'this is description for mysql lesson eight',
                'lesson_slug'        => 'mysql-lesson-eight',
                'lesson_image'       => 'mysql-lesson-eight.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 7,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'mysql lesson nine',
                'lesson_description' => 'this is description for mysql lesson nine',
                'lesson_slug'        => 'mysql-lesson-nine',
                'lesson_image'       => 'mysql-lesson-nine.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 7,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'mysql lesson ten',
                'lesson_description' => 'this is description for mysql lesson ten',
                'lesson_slug'        => 'mysql-lesson-ten',
                'lesson_image'       => 'mysql-lesson-ten.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 7,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'mysql lesson eleven',
                'lesson_description' => 'this is description for mysql lesson eleven',
                'lesson_slug'        => 'mysql-lesson-eleven',
                'lesson_image'       => 'mysql-lesson-eleven.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 7,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'laravel lesson one',
                'lesson_description' => 'this is description for laravel lesson one',
                'lesson_slug'        => 'laravel-lesson-one',
                'lesson_image'       => 'laravel-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 8,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'laravel lesson two',
                'lesson_description' => 'this is description for laravel lesson two',
                'lesson_slug'        => 'laravel-lesson-two',
                'lesson_image'       => 'laravel-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 8,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'laravel lesson three',
                'lesson_description' => 'this is description for laravel lesson three',
                'lesson_slug'        => 'laravel-lesson-three',
                'lesson_image'       => 'laravel-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 8,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'laravel lesson four',
                'lesson_description' => 'this is description for laravel lesson four',
                'lesson_slug'        => 'laravel-lesson-four',
                'lesson_image'       => 'laravel-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 8,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'laravel lesson five',
                'lesson_description' => 'this is description for laravel lesson five',
                'lesson_slug'        => 'laravel-lesson-five',
                'lesson_image'       => 'laravel-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 8,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'laravel lesson six',
                'lesson_description' => 'this is description for laravel lesson six',
                'lesson_slug'        => 'laravel-lesson-six',
                'lesson_image'       => 'laravel-lesson-six.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 8,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'laravel lesson seven',
                'lesson_description' => 'this is description for laravel lesson seven',
                'lesson_slug'        => 'laravel-lesson-seven',
                'lesson_image'       => 'laravel-lesson-seven.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 8,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'laravel lesson eight',
                'lesson_description' => 'this is description for laravel lesson eight',
                'lesson_slug'        => 'laravel-lesson-eight',
                'lesson_image'       => 'laravel-lesson-eight.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 8,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'vuejs lesson one',
                'lesson_description' => 'this is description for vuejs lesson one',
                'lesson_slug'        => 'vuejs-lesson-one',
                'lesson_image'       => 'vuejs-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 9,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'vuejs lesson two',
                'lesson_description' => 'this is description for vuejs lesson two',
                'lesson_slug'        => 'vuejs-lesson-two',
                'lesson_image'       => 'vuejs-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 9,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'vuejs lesson three',
                'lesson_description' => 'this is description for vuejs lesson three',
                'lesson_slug'        => 'vuejs-lesson-three',
                'lesson_image'       => 'vuejs-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 9,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'vuejs lesson four',
                'lesson_description' => 'this is description for vuejs lesson four',
                'lesson_slug'        => 'vuejs-lesson-four',
                'lesson_image'       => 'vuejs-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 9,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'vuejs lesson five',
                'lesson_description' => 'this is description for vuejs lesson five',
                'lesson_slug'        => 'vuejs-lesson-five',
                'lesson_image'       => 'vuejs-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 9,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'vuejs lesson six',
                'lesson_description' => 'this is description for vuejs lesson six',
                'lesson_slug'        => 'vuejs-lesson-six',
                'lesson_image'       => 'vuejs-lesson-six.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 9,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'vuejs lesson seven',
                'lesson_description' => 'this is description for vuejs lesson seven',
                'lesson_slug'        => 'vuejs-lesson-seven',
                'lesson_image'       => 'vuejs-lesson-seven.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 9,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'vuejs lesson eight',
                'lesson_description' => 'this is description for vuejs lesson eight',
                'lesson_slug'        => 'vuejs-lesson-eight',
                'lesson_image'       => 'vuejs-lesson-eight.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 9,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'vuejs lesson nine',
                'lesson_description' => 'this is description for vuejs lesson nine',
                'lesson_slug'        => 'vuejs-lesson-nine',
                'lesson_image'       => 'vuejs-lesson-nine.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 9,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'vuejs lesson ten',
                'lesson_description' => 'this is description for vuejs lesson ten',
                'lesson_slug'        => 'vuejs-lesson-ten',
                'lesson_image'       => 'vuejs-lesson-ten.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 9,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'vuejs lesson eleven',
                'lesson_description' => 'this is description for vuejs lesson eleven',
                'lesson_slug'        => 'vuejs-lesson-eleven',
                'lesson_image'       => 'vuejs-lesson-eleven.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'          => 9,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'python lesson one',
                'lesson_description' => 'this is description for python lesson one',
                'lesson_slug'        => 'python-lesson-one',
                'lesson_image'       => 'python-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 10,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'python lesson two',
                'lesson_description' => 'this is description for python lesson two',
                'lesson_slug'        => 'python-lesson-two',
                'lesson_image'       => 'python-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 10,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'python lesson three',
                'lesson_description' => 'this is description for python lesson three',
                'lesson_slug'        => 'python-lesson-three',
                'lesson_image'       => 'python-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 10,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'python lesson four',
                'lesson_description' => 'this is description for python lesson four',
                'lesson_slug'        => 'python-lesson-four',
                'lesson_image'       => 'python-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 10,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'python lesson five',
                'lesson_description' => 'this is description for python lesson five',
                'lesson_slug'        => 'python-lesson-five',
                'lesson_image'       => 'python-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 10,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'python lesson six',
                'lesson_description' => 'this is description for python lesson six',
                'lesson_slug'        => 'python-lesson-six',
                'lesson_image'       => 'python-lesson-six.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 10,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'python lesson seven',
                'lesson_description' => 'this is description for python lesson seven',
                'lesson_slug'        => 'python-lesson-seven',
                'lesson_image'       => 'python-lesson-seven.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 10,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'python lesson eight',
                'lesson_description' => 'this is description for python lesson eight',
                'lesson_slug'        => 'python-lesson-eight',
                'lesson_image'       => 'python-lesson-eight.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 10,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'python lesson nine',
                'lesson_description' => 'this is description for python lesson nine',
                'lesson_slug'        => 'python-lesson-nine',
                'lesson_image'       => 'python-lesson-nine.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 10,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'python lesson ten',
                'lesson_description' => 'this is description for python lesson ten',
                'lesson_slug'        => 'python-lesson-ten',
                'lesson_image'       => 'python-lesson-ten.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 10,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'python lesson eleven',
                'lesson_description' => 'this is description for python lesson eleven',
                'lesson_slug'        => 'python-lesson-eleven',
                'lesson_image'       => 'python-lesson-eleven.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 10,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'sqllite lesson one',
                'lesson_description' => 'this is description for sqllite lesson one',
                'lesson_slug'        => 'sqllite-lesson-one',
                'lesson_image'       => 'sqllite-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 11,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'sqllite lesson two',
                'lesson_description' => 'this is description for sqllite lesson two',
                'lesson_slug'        => 'sqllite-lesson-two',
                'lesson_image'       => 'sqllite-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 11,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'sqllite lesson three',
                'lesson_description' => 'this is description for sqllite lesson three',
                'lesson_slug'        => 'sqllite-lesson-three',
                'lesson_image'       => 'sqllite-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 11,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'sqllite lesson four',
                'lesson_description' => 'this is description for sqllite lesson four',
                'lesson_slug'        => 'sqllite-lesson-four',
                'lesson_image'       => 'sqllite-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 11,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'sqllite lesson five',
                'lesson_description' => 'this is description for sqllite lesson five',
                'lesson_slug'        => 'sqllite-lesson-five',
                'lesson_image'       => 'sqllite-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 11,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'sqllite lesson six',
                'lesson_description' => 'this is description for sqllite lesson six',
                'lesson_slug'        => 'sqllite-lesson-six',
                'lesson_image'       => 'sqllite-lesson-six.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 11,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'sqllite lesson seven',
                'lesson_description' => 'this is description for sqllite lesson seven',
                'lesson_slug'        => 'sqllite-lesson-seven',
                'lesson_image'       => 'sqllite-lesson-seven.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 11,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'sqllite lesson eight',
                'lesson_description' => 'this is description for sqllite lesson eight',
                'lesson_slug'        => 'sqllite-lesson-eight',
                'lesson_image'       => 'sqllite-lesson-eight.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 11,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'sqllite lesson nine',
                'lesson_description' => 'this is description for sqllite lesson nine',
                'lesson_slug'        => 'sqllite-lesson-nine',
                'lesson_image'       => 'sqllite-lesson-nine.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 11,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'sqllite lesson ten',
                'lesson_description' => 'this is description for sqllite lesson ten',
                'lesson_slug'        => 'sqllite-lesson-ten',
                'lesson_image'       => 'sqllite-lesson-ten.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 11,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'sqllite lesson eleven',
                'lesson_description' => 'this is description for sqllite lesson eleven',
                'lesson_slug'        => 'sqllite-lesson-eleven',
                'lesson_image'       => 'sqllite-lesson-eleven.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 11,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'django lesson one',
                'lesson_description' => 'this is description for django lesson one',
                'lesson_slug'        => 'django-lesson-one',
                'lesson_image'       => 'django-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 12,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'django lesson two',
                'lesson_description' => 'this is description for django lesson two',
                'lesson_slug'        => 'django-lesson-two',
                'lesson_image'       => 'django-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 12,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'django lesson three',
                'lesson_description' => 'this is description for django lesson three',
                'lesson_slug'        => 'django-lesson-three',
                'lesson_image'       => 'django-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 12,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'django lesson four',
                'lesson_description' => 'this is description for django lesson four',
                'lesson_slug'        => 'django-lesson-four',
                'lesson_image'       => 'django-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 12,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'django lesson five',
                'lesson_description' => 'this is description for django lesson five',
                'lesson_slug'        => 'django-lesson-five',
                'lesson_image'       => 'django-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 12,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'django lesson six',
                'lesson_description' => 'this is description for django lesson six',
                'lesson_slug'        => 'django-lesson-six',
                'lesson_image'       => 'django-lesson-six.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 12,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'django lesson seven',
                'lesson_description' => 'this is description for django lesson seven',
                'lesson_slug'        => 'django-lesson-seven',
                'lesson_image'       => 'django-lesson-seven.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 12,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'django lesson eight',
                'lesson_description' => 'this is description for django lesson eight',
                'lesson_slug'        => 'django-lesson-eight',
                'lesson_image'       => 'django-lesson-eight.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 12,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'django lesson nine',
                'lesson_description' => 'this is description for django lesson nine',
                'lesson_slug'        => 'django-lesson-nine',
                'lesson_image'       => 'django-lesson-nine.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 12,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'django lesson ten',
                'lesson_description' => 'this is description for django lesson ten',
                'lesson_slug'        => 'django-lesson-ten',
                'lesson_image'       => 'django-lesson-ten.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 12,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'django lesson eleven',
                'lesson_description' => 'this is description for django lesson eleven',
                'lesson_slug'        => 'django-lesson-eleven',
                'lesson_image'       => 'django-lesson-eleven.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 12,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'nodejs lesson one',
                'lesson_description' => 'this is description for nodejs lesson one',
                'lesson_slug'        => 'nodejs-lesson-one',
                'lesson_image'       => 'nodejs-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 13,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'nodejs lesson two',
                'lesson_description' => 'this is description for nodejs lesson two',
                'lesson_slug'        => 'nodejs-lesson-two',
                'lesson_image'       => 'nodejs-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 13,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'nodejs lesson three',
                'lesson_description' => 'this is description for nodejs lesson three',
                'lesson_slug'        => 'nodejs-lesson-three',
                'lesson_image'       => 'nodejs-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 13,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'nodejs lesson four',
                'lesson_description' => 'this is description for nodejs lesson four',
                'lesson_slug'        => 'nodejs-lesson-four',
                'lesson_image'       => 'nodejs-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 13,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'nodejs lesson five',
                'lesson_description' => 'this is description for nodejs lesson five',
                'lesson_slug'        => 'nodejs-lesson-five',
                'lesson_image'       => 'nodejs-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 13,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'nodejs lesson six',
                'lesson_description' => 'this is description for nodejs lesson six',
                'lesson_slug'        => 'nodejs-lesson-six',
                'lesson_image'       => 'nodejs-lesson-six.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 13,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'nodejs lesson seven',
                'lesson_description' => 'this is description for nodejs lesson seven',
                'lesson_slug'        => 'nodejs-lesson-seven',
                'lesson_image'       => 'nodejs-lesson-seven.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 13,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'nodejs lesson eight',
                'lesson_description' => 'this is description for nodejs lesson eight',
                'lesson_slug'        => 'nodejs-lesson-eight',
                'lesson_image'       => 'nodejs-lesson-eight.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 13,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'nodejs lesson nine',
                'lesson_description' => 'this is description for nodejs lesson nine',
                'lesson_slug'        => 'nodejs-lesson-nine',
                'lesson_image'       => 'nodejs-lesson-nine.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 13,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'nodejs lesson ten',
                'lesson_description' => 'this is description for nodejs lesson ten',
                'lesson_slug'        => 'nodejs-lesson-ten',
                'lesson_image'       => 'nodejs-lesson-ten.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 13,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'nodejs lesson eleven',
                'lesson_description' => 'this is description for nodejs lesson eleven',
                'lesson_slug'        => 'nodejs-lesson-eleven',
                'lesson_image'       => 'nodejs-lesson-eleven.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 13,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'expressjs lesson one',
                'lesson_description' => 'this is description for expressjs lesson one',
                'lesson_slug'        => 'expressjs-lesson-one',
                'lesson_image'       => 'expressjs-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 14,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'expressjs lesson two',
                'lesson_description' => 'this is description for expressjs lesson two',
                'lesson_slug'        => 'expressjs-lesson-two',
                'lesson_image'       => 'expressjs-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 14,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'expressjs lesson three',
                'lesson_description' => 'this is description for expressjs lesson three',
                'lesson_slug'        => 'expressjs-lesson-three',
                'lesson_image'       => 'expressjs-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 14,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'expressjs lesson four',
                'lesson_description' => 'this is description for expressjs lesson four',
                'lesson_slug'        => 'expressjs-lesson-four',
                'lesson_image'       => 'expressjs-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 14,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'expressjs lesson five',
                'lesson_description' => 'this is description for expressjs lesson five',
                'lesson_slug'        => 'expressjs-lesson-five',
                'lesson_image'       => 'expressjs-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 14,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'expressjs lesson six',
                'lesson_description' => 'this is description for expressjs lesson six',
                'lesson_slug'        => 'expressjs-lesson-six',
                'lesson_image'       => 'expressjs-lesson-six.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 14,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'expressjs lesson seven',
                'lesson_description' => 'this is description for expressjs lesson seven',
                'lesson_slug'        => 'expressjs-lesson-seven',
                'lesson_image'       => 'expressjs-lesson-seven.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 14,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'expressjs lesson eight',
                'lesson_description' => 'this is description for expressjs lesson eight',
                'lesson_slug'        => 'expressjs-lesson-eight',
                'lesson_image'       => 'expressjs-lesson-eight.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 14,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'expressjs lesson nine',
                'lesson_description' => 'this is description for expressjs lesson nine',
                'lesson_slug'        => 'expressjs-lesson-nine',
                'lesson_image'       => 'expressjs-lesson-nine.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 14,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'expressjs lesson ten',
                'lesson_description' => 'this is description for expressjs lesson ten',
                'lesson_slug'        => 'expressjs-lesson-ten',
                'lesson_image'       => 'expressjs-lesson-ten.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 14,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'expressjs lesson eleven',
                'lesson_description' => 'this is description for expressjs lesson eleven',
                'lesson_slug'        => 'expressjs-lesson-eleven',
                'lesson_image'       => 'expressjs-lesson-eleven.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 14,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'mongodb lesson one',
                'lesson_description' => 'this is description for mongodb lesson one',
                'lesson_slug'        => 'mongodb-lesson-one',
                'lesson_image'       => 'mongodb-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 15,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'mongodb lesson two',
                'lesson_description' => 'this is description for mongodb lesson two',
                'lesson_slug'        => 'mongodb-lesson-two',
                'lesson_image'       => 'mongodb-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 15,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'mongodb lesson three',
                'lesson_description' => 'this is description for mongodb lesson three',
                'lesson_slug'        => 'mongodb-lesson-three',
                'lesson_image'       => 'mongodb-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 15,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'mongodb lesson four',
                'lesson_description' => 'this is description for mongodb lesson four',
                'lesson_slug'        => 'mongodb-lesson-four',
                'lesson_image'       => 'mongodb-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 15,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'mongodb lesson five',
                'lesson_description' => 'this is description for mongodb lesson five',
                'lesson_slug'        => 'mongodb-lesson-five',
                'lesson_image'       => 'mongodb-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 15,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'angualrjs lesson one',
                'lesson_description' => 'this is description for angualrjs lesson one',
                'lesson_slug'        => 'angualrjs-lesson-one',
                'lesson_image'       => 'angualrjs-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 16,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'angualrjs lesson two',
                'lesson_description' => 'this is description for angualrjs lesson two',
                'lesson_slug'        => 'angualrjs-lesson-two',
                'lesson_image'       => 'angualrjs-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 16,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'angualrjs lesson three',
                'lesson_description' => 'this is description for angualrjs lesson three',
                'lesson_slug'        => 'angualrjs-lesson-three',
                'lesson_image'       => 'angualrjs-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 16,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'angualrjs lesson four',
                'lesson_description' => 'this is description for angualrjs lesson four',
                'lesson_slug'        => 'angualrjs-lesson-four',
                'lesson_image'       => 'angualrjs-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 16,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'angualrjs lesson five',
                'lesson_description' => 'this is description for angualrjs lesson five',
                'lesson_slug'        => 'angualrjs-lesson-five',
                'lesson_image'       => 'angualrjs-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 16,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'photoshop lesson one',
                'lesson_description' => 'this is description for photoshop lesson one',
                'lesson_slug'        => 'photoshop-lesson-one',
                'lesson_image'       => 'photoshop-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 17,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'photoshop lesson two',
                'lesson_description' => 'this is description for photoshop lesson two',
                'lesson_slug'        => 'photoshop-lesson-two',
                'lesson_image'       => 'photoshop-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 17,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'photoshop lesson three',
                'lesson_description' => 'this is description for photoshop lesson three',
                'lesson_slug'        => 'photoshop-lesson-three',
                'lesson_image'       => 'photoshop-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 17,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'photoshop lesson four',
                'lesson_description' => 'this is description for photoshop lesson four',
                'lesson_slug'        => 'photoshop-lesson-four',
                'lesson_image'       => 'photoshop-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 17,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'photoshop lesson five',
                'lesson_description' => 'this is description for photoshop lesson five',
                'lesson_slug'        => 'photoshop-lesson-five',
                'lesson_image'       => 'photoshop-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 17,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'illustrator lesson one',
                'lesson_description' => 'this is description for illustrator lesson one',
                'lesson_slug'        => 'illustrator-lesson-one',
                'lesson_image'       => 'illustrator-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 18,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'illustrator lesson two',
                'lesson_description' => 'this is description for illustrator lesson two',
                'lesson_slug'        => 'illustrator-lesson-two',
                'lesson_image'       => 'illustrator-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 18,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'illustrator lesson three',
                'lesson_description' => 'this is description for illustrator lesson three',
                'lesson_slug'        => 'illustrator-lesson-three',
                'lesson_image'       => 'illustrator-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 18,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'illustrator lesson four',
                'lesson_description' => 'this is description for illustrator lesson four',
                'lesson_slug'        => 'illustrator-lesson-four',
                'lesson_image'       => 'illustrator-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 18,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'illustrator lesson five',
                'lesson_description' => 'this is description for illustrator lesson five',
                'lesson_slug'        => 'illustrator-lesson-five',
                'lesson_image'       => 'illustrator-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 18,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'indesign lesson one',
                'lesson_description' => 'this is description for indesign lesson one',
                'lesson_slug'        => 'indesign-lesson-one',
                'lesson_image'       => 'indesign-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 19,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'indesign lesson two',
                'lesson_description' => 'this is description for indesign lesson two',
                'lesson_slug'        => 'indesign-lesson-two',
                'lesson_image'       => 'indesign-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 19,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'indesign lesson three',
                'lesson_description' => 'this is description for indesign lesson three',
                'lesson_slug'        => 'indesign-lesson-three',
                'lesson_image'       => 'indesign-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 19,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'indesign lesson four',
                'lesson_description' => 'this is description for indesign lesson four',
                'lesson_slug'        => 'indesign-lesson-four',
                'lesson_image'       => 'indesign-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 19,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'indesign lesson five',
                'lesson_description' => 'this is description for indesign lesson five',
                'lesson_slug'        => 'indesign-lesson-five',
                'lesson_image'       => 'indesign-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 19,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'adobexd lesson one',
                'lesson_description' => 'this is description for adobexd lesson one',
                'lesson_slug'        => 'adobexd-lesson-one',
                'lesson_image'       => 'adobexd-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 20,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'adobexd lesson two',
                'lesson_description' => 'this is description for adobexd lesson two',
                'lesson_slug'        => 'adobexd-lesson-two',
                'lesson_image'       => 'adobexd-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 20,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'adobexd lesson three',
                'lesson_description' => 'this is description for adobexd lesson three',
                'lesson_slug'        => 'adobexd-lesson-three',
                'lesson_image'       => 'adobexd-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 20,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'adobexd lesson four',
                'lesson_description' => 'this is description for adobexd lesson four',
                'lesson_slug'        => 'adobexd-lesson-four',
                'lesson_image'       => 'adobexd-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 20,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'adobexd lesson five',
                'lesson_description' => 'this is description for adobexd lesson five',
                'lesson_slug'        => 'adobexd-lesson-five',
                'lesson_image'       => 'adobexd-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 20,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'after-effect lesson one',
                'lesson_description' => 'this is description for after-effect lesson one',
                'lesson_slug'        => 'after-effect-lesson-one',
                'lesson_image'       => 'after-effect-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 21,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'after-effect lesson two',
                'lesson_description' => 'this is description for after-effect lesson two',
                'lesson_slug'        => 'after-effect-lesson-two',
                'lesson_image'       => 'after-effect-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 21,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'after-effect lesson three',
                'lesson_description' => 'this is description for after-effect lesson three',
                'lesson_slug'        => 'after-effect-lesson-three',
                'lesson_image'       => 'after-effect-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 21,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'after-effect lesson four',
                'lesson_description' => 'this is description for after-effect lesson four',
                'lesson_slug'        => 'after-effect-lesson-four',
                'lesson_image'       => 'after-effect-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 21,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'after-effect lesson five',
                'lesson_description' => 'this is description for after-effect lesson five',
                'lesson_slug'        => 'after-effect-lesson-five',
                'lesson_image'       => 'after-effect-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 21,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'premiere lesson one',
                'lesson_description' => 'this is description for premiere lesson one',
                'lesson_slug'        => 'premiere-lesson-one',
                'lesson_image'       => 'premiere-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 22,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'premiere lesson two',
                'lesson_description' => 'this is description for premiere lesson two',
                'lesson_slug'        => 'premiere-lesson-two',
                'lesson_image'       => 'premiere-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 22,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'premiere lesson three',
                'lesson_description' => 'this is description for premiere lesson three',
                'lesson_slug'        => 'premiere-lesson-three',
                'lesson_image'       => 'premiere-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 22,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'premiere lesson four',
                'lesson_description' => 'this is description for premiere lesson four',
                'lesson_slug'        => 'premiere-lesson-four',
                'lesson_image'       => 'premiere-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 22,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'premiere lesson five',
                'lesson_description' => 'this is description for premiere lesson five',
                'lesson_slug'        => 'premiere-lesson-five',
                'lesson_image'       => 'premiere-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 22,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'drawing lesson one',
                'lesson_description' => 'this is description for drawing lesson one',
                'lesson_slug'        => 'drawing-lesson-one',
                'lesson_image'       => 'drawing-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 23,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'drawing lesson two',
                'lesson_description' => 'this is description for drawing lesson two',
                'lesson_slug'        => 'drawing-lesson-two',
                'lesson_image'       => 'drawing-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 23,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'drawing lesson three',
                'lesson_description' => 'this is description for drawing lesson three',
                'lesson_slug'        => 'drawing-lesson-three',
                'lesson_image'       => 'drawing-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 23,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'drawing lesson four',
                'lesson_description' => 'this is description for drawing lesson four',
                'lesson_slug'        => 'drawing-lesson-four',
                'lesson_image'       => 'drawing-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 23,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'drawing lesson five',
                'lesson_description' => 'this is description for drawing lesson five',
                'lesson_slug'        => 'drawing-lesson-five',
                'lesson_image'       => 'drawing-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 23,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'digital-painting lesson one',
                'lesson_description' => 'this is description for digital-painting lesson one',
                'lesson_slug'        => 'digital-painting-lesson-one',
                'lesson_image'       => 'digital-painting-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 24,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'digital-painting lesson two',
                'lesson_description' => 'this is description for digital-painting lesson two',
                'lesson_slug'        => 'digital-painting-lesson-two',
                'lesson_image'       => 'digital-painting-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 24,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'digital-painting lesson three',
                'lesson_description' => 'this is description for digital-painting lesson three',
                'lesson_slug'        => 'digital-painting-lesson-three',
                'lesson_image'       => 'digital-painting-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 24,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'digital-painting lesson four',
                'lesson_description' => 'this is description for digital-painting lesson four',
                'lesson_slug'        => 'digital-painting-lesson-four',
                'lesson_image'       => 'digital-painting-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 24,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'digital-painting lesson five',
                'lesson_description' => 'this is description for digital-painting lesson five',
                'lesson_slug'        => 'digital-painting-lesson-five',
                'lesson_image'       => 'digital-painting-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 24,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'unity-3d lesson one',
                'lesson_description' => 'this is description for unity-3d lesson one',
                'lesson_slug'        => 'unity-3d-lesson-one',
                'lesson_image'       => 'unity-3d-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 25,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'unity-3d lesson two',
                'lesson_description' => 'this is description for unity-3d lesson two',
                'lesson_slug'        => 'unity-3d-lesson-two',
                'lesson_image'       => 'unity-3d-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 25,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'unity-3d lesson three',
                'lesson_description' => 'this is description for unity-3d lesson three',
                'lesson_slug'        => 'unity-3d-lesson-three',
                'lesson_image'       => 'unity-3d-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 25,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'unity-3d lesson four',
                'lesson_description' => 'this is description for unity-3d lesson four',
                'lesson_slug'        => 'unity-3d-lesson-four',
                'lesson_image'       => 'unity-3d-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 25,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'unity-3d lesson five',
                'lesson_description' => 'this is description for unity-3d lesson five',
                'lesson_slug'        => 'unity-3d-lesson-five',
                'lesson_image'       => 'unity-3d-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 25,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'unreal-engine lesson one',
                'lesson_description' => 'this is description for unreal-engine lesson one',
                'lesson_slug'        => 'unreal-engine-lesson-one',
                'lesson_image'       => 'unreal-engine-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 26,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'unreal-engine lesson two',
                'lesson_description' => 'this is description for unreal-engine lesson two',
                'lesson_slug'        => 'unreal-engine-lesson-two',
                'lesson_image'       => 'unreal-engine-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 26,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'unreal-engine lesson three',
                'lesson_description' => 'this is description for unreal-engine lesson three',
                'lesson_slug'        => 'unreal-engine-lesson-three',
                'lesson_image'       => 'unreal-engine-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 26,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'unreal-engine lesson four',
                'lesson_description' => 'this is description for unreal-engine lesson four',
                'lesson_slug'        => 'unreal-engine-lesson-four',
                'lesson_image'       => 'unreal-engine-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 26,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'unreal-engine lesson five',
                'lesson_description' => 'this is description for unreal-engine lesson five',
                'lesson_slug'        => 'unreal-engine-lesson-five',
                'lesson_image'       => 'unreal-engine-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 26,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'it-network-fundmentals lesson one',
                'lesson_description' => 'this is description for it-network-fundmentals lesson one',
                'lesson_slug'        => 'it-network-fundmentals-lesson-one',
                'lesson_image'       => 'it-network-fundmentals-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 27,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'it-network-fundmentals lesson two',
                'lesson_description' => 'this is description for it-network-fundmentals lesson two',
                'lesson_slug'        => 'it-network-fundmentals-lesson-two',
                'lesson_image'       => 'it-network-fundmentals-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 27,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'it-network-fundmentals lesson three',
                'lesson_description' => 'this is description for it-network-fundmentals lesson three',
                'lesson_slug'        => 'it-network-fundmentals-lesson-three',
                'lesson_image'       => 'it-network-fundmentals-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 27,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'it-network-fundmentals lesson four',
                'lesson_description' => 'this is description for it-network-fundmentals lesson four',
                'lesson_slug'        => 'it-network-fundmentals-lesson-four',
                'lesson_image'       => 'it-network-fundmentals-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 27,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'it-network-fundmentals lesson five',
                'lesson_description' => 'this is description for it-network-fundmentals lesson five',
                'lesson_slug'        => 'it-network-fundmentals-lesson-five',
                'lesson_image'       => 'it-network-fundmentals-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 27,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'network-security lesson one',
                'lesson_description' => 'this is description for network-security lesson one',
                'lesson_slug'        => 'network-security-lesson-one',
                'lesson_image'       => 'network-security-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 28,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'network-security lesson two',
                'lesson_description' => 'this is description for network-security lesson two',
                'lesson_slug'        => 'network-security-lesson-two',
                'lesson_image'       => 'network-security-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 28,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'network-security lesson three',
                'lesson_description' => 'this is description for network-security lesson three',
                'lesson_slug'        => 'network-security-lesson-three',
                'lesson_image'       => 'network-security-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 28,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'network-security lesson four',
                'lesson_description' => 'this is description for network-security lesson four',
                'lesson_slug'        => 'network-security-lesson-four',
                'lesson_image'       => 'network-security-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 28,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'network-security lesson five',
                'lesson_description' => 'this is description for network-security lesson five',
                'lesson_slug'        => 'network-security-lesson-five',
                'lesson_image'       => 'network-security-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 28,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'cyber-security lesson one',
                'lesson_description' => 'this is description for cyber-security lesson one',
                'lesson_slug'        => 'cyber-security-lesson-one',
                'lesson_image'       => 'cyber-security-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 29,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'cyber-security lesson two',
                'lesson_description' => 'this is description for cyber-security lesson two',
                'lesson_slug'        => 'cyber-security-lesson-two',
                'lesson_image'       => 'cyber-security-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 29,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'cyber-security lesson three',
                'lesson_description' => 'this is description for cyber-security lesson three',
                'lesson_slug'        => 'cyber-security-lesson-three',
                'lesson_image'       => 'cyber-security-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 29,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'cyber-security lesson four',
                'lesson_description' => 'this is description for cyber-security lesson four',
                'lesson_slug'        => 'cyber-security-lesson-four',
                'lesson_image'       => 'cyber-security-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 29,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'cyber-security lesson five',
                'lesson_description' => 'this is description for cyber-security lesson five',
                'lesson_slug'        => 'cyber-security-lesson-five',
                'lesson_image'       => 'cyber-security-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 29,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'ethial-hacking lesson one',
                'lesson_description' => 'this is description for ethial-hacking lesson one',
                'lesson_slug'        => 'ethial-hacking-lesson-one',
                'lesson_image'       => 'ethial-hacking-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 30,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'ethial-hacking lesson two',
                'lesson_description' => 'this is description for ethial-hacking lesson two',
                'lesson_slug'        => 'ethial-hacking-lesson-two',
                'lesson_image'       => 'ethial-hacking-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 30,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'ethial-hacking lesson three',
                'lesson_description' => 'this is description for ethial-hacking lesson three',
                'lesson_slug'        => 'ethial-hacking-lesson-three',
                'lesson_image'       => 'ethial-hacking-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 30,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'ethial-hacking lesson four',
                'lesson_description' => 'this is description for ethial-hacking lesson four',
                'lesson_slug'        => 'ethial-hacking-lesson-four',
                'lesson_image'       => 'ethial-hacking-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 30,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'ethial-hacking lesson five',
                'lesson_description' => 'this is description for ethial-hacking lesson five',
                'lesson_slug'        => 'ethial-hacking-lesson-five',
                'lesson_image'       => 'ethial-hacking-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 30,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'power-shell lesson one',
                'lesson_description' => 'this is description for power-shell lesson one',
                'lesson_slug'        => 'power-shell-lesson-one',
                'lesson_image'       => 'power-shell-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 31,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'power-shell lesson two',
                'lesson_description' => 'this is description for power-shell lesson two',
                'lesson_slug'        => 'power-shell-lesson-two',
                'lesson_image'       => 'power-shell-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 31,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'power-shell lesson three',
                'lesson_description' => 'this is description for power-shell lesson three',
                'lesson_slug'        => 'power-shell-lesson-three',
                'lesson_image'       => 'power-shell-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 31,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'power-shell lesson four',
                'lesson_description' => 'this is description for power-shell lesson four',
                'lesson_slug'        => 'power-shell-lesson-four',
                'lesson_image'       => 'power-shell-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 31,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'power-shell lesson five',
                'lesson_description' => 'this is description for power-shell lesson five',
                'lesson_slug'        => 'power-shell-lesson-five',
                'lesson_image'       => 'power-shell-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 31,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'shell-scripting lesson one',
                'lesson_description' => 'this is description for shell-scripting lesson one',
                'lesson_slug'        => 'shell-scripting-lesson-one',
                'lesson_image'       => 'shell-scripting-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 32,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'shell-scripting lesson two',
                'lesson_description' => 'this is description for shell-scripting lesson two',
                'lesson_slug'        => 'shell-scripting-lesson-two',
                'lesson_image'       => 'shell-scripting-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 32,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'shell-scripting lesson three',
                'lesson_description' => 'this is description for shell-scripting lesson three',
                'lesson_slug'        => 'shell-scripting-lesson-three',
                'lesson_image'       => 'shell-scripting-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 32,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'shell-scripting lesson four',
                'lesson_description' => 'this is description for shell-scripting lesson four',
                'lesson_slug'        => 'shell-scripting-lesson-four',
                'lesson_image'       => 'shell-scripting-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 32,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'shell-scripting lesson five',
                'lesson_description' => 'this is description for shell-scripting lesson five',
                'lesson_slug'        => 'shell-scripting-lesson-five',
                'lesson_image'       => 'shell-scripting-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 32,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'windows-server lesson one',
                'lesson_description' => 'this is description for windows-server lesson one',
                'lesson_slug'        => 'windows-server-lesson-one',
                'lesson_image'       => 'windows-server-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 33,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'windows-server lesson two',
                'lesson_description' => 'this is description for windows-server lesson two',
                'lesson_slug'        => 'windows-server-lesson-two',
                'lesson_image'       => 'windows-server-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 33,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'windows-server lesson three',
                'lesson_description' => 'this is description for windows-server lesson three',
                'lesson_slug'        => 'windows-server-lesson-three',
                'lesson_image'       => 'windows-server-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 33,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'windows-server lesson four',
                'lesson_description' => 'this is description for windows-server lesson four',
                'lesson_slug'        => 'windows-server-lesson-four',
                'lesson_image'       => 'windows-server-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 33,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'windows-server lesson five',
                'lesson_description' => 'this is description for windows-server lesson five',
                'lesson_slug'        => 'windows-server-lesson-five',
                'lesson_image'       => 'windows-server-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 33,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'linux lesson one',
                'lesson_description' => 'this is description for linux lesson one',
                'lesson_slug'        => 'linux-lesson-one',
                'lesson_image'       => 'linux-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 34,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'linux lesson two',
                'lesson_description' => 'this is description for linux lesson two',
                'lesson_slug'        => 'linux-lesson-two',
                'lesson_image'       => 'linux-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 34,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'linux lesson three',
                'lesson_description' => 'this is description for linux lesson three',
                'lesson_slug'        => 'linux-lesson-three',
                'lesson_image'       => 'linux-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 34,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'linux lesson four',
                'lesson_description' => 'this is description for linux lesson four',
                'lesson_slug'        => 'linux-lesson-four',
                'lesson_image'       => 'linux-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 34,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'linux lesson five',
                'lesson_description' => 'this is description for linux lesson five',
                'lesson_slug'        => 'linux-lesson-five',
                'lesson_image'       => 'linux-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 34,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'linux-adminstration lesson one',
                'lesson_description' => 'this is description for linux-adminstration lesson one',
                'lesson_slug'        => 'linux-adminstration-lesson-one',
                'lesson_image'       => 'linux-adminstration-lesson-one.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 35,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'linux-adminstration lesson two',
                'lesson_description' => 'this is description for linux-adminstration lesson two',
                'lesson_slug'        => 'linux-adminstration-lesson-two',
                'lesson_image'       => 'linux-adminstration-lesson-two.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 35,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'linux-adminstration lesson three',
                'lesson_description' => 'this is description for linux-adminstration lesson three',
                'lesson_slug'        => 'linux-adminstration-lesson-three',
                'lesson_image'       => 'linux-adminstration-lesson-three.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 35,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'linux-adminstration lesson four',
                'lesson_description' => 'this is description for linux-adminstration lesson four',
                'lesson_slug'        => 'linux-adminstration-lesson-four',
                'lesson_image'       => 'linux-adminstration-lesson-four.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 35,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'lesson_name'        => 'linux-adminstration lesson five',
                'lesson_description' => 'this is description for linux-adminstration lesson five',
                'lesson_slug'        => 'linux-adminstration-lesson-five',
                'lesson_image'       => 'linux-adminstration-lesson-five.jpg',
                'lesson_video'       => 'https://www.youtube.com/embed/2MpUj-Aua48',
                'course_id'         => 35,
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            )
        );
    }
}
