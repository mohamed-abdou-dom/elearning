<?php

use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exams')->delete();
        DB::table('exams')->insert(array(
            array(
                'exam_name' => 'html',
                'exam_description' => 'this is description for html',
                'exam_slug' => 'html',
                'final_score' => 100,
                'pass_score' => 50
            ),
            array(
                'exam_name' => 'css',
                'exam_description' => 'this is description for css',
                'exam_slug' => 'css',
                'final_score' => 100,
                'pass_score' => 50
            ),
        ));
    }
}
