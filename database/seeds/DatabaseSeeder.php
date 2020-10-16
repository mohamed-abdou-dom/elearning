<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            CourseSeeder::class,
            ProgramSeeder::class,
            CourseProgramSeeder::class,
            CategoryCoursesSeeder::class,
            LessonSeeder::class,
            ExamSeeder::class,
            QuestionSeeder::class
        ]);
    }
}