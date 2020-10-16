<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(Auth::user()){
        return redirect('/profile');
    }else{
        return redirect('/login');
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'weconnected', 'namespace' => 'WeConnected', 'middleware' => ['auth']], function () {
    // profile page
    Route::get('/profile', 'ProfileController@GetProfile');
    Route::put('/profile', 'ProfileController@UpdateProfile');

    // mycourses page
    Route::get('/mycourses', 'ProfileController@GetMyCourses');
    Route::delete('/mycourse/{course_id}', 'ProfileController@RemoveMyCourse');

    // mycareers page
    Route::get('/mycareers', 'ProfileController@GetMyCareers');
    Route::delete('/mycareer/{program_id}', 'ProfileController@RemoveMyCareer');

    // mycertifications page
    Route::get('/certifications', 'ProfileController@CourseCertifications');
    Route::delete('/course-certified/{id}', 'ProfileController@RemoveMyCourseCertified');
    Route::delete('/program-certified/{id}', 'ProfileController@RemoveMyProgramCertified');

    // myarticles page
    Route::get('/myarticles', 'ProfileController@GetMyArticles');
    Route::delete('/article/{id}', 'ProfileController@RemoveMyArticle');
    Route::get('/article/{article_slug}/edit', 'ProfileController@EditArticle');
    Route::put('/article/update-article', 'ProfileController@UpdateArticle');
    // program routes
    Route::get('/categories', 'MainController@Categories');
    Route::get('/category/{slug}', 'MainController@CategoryDetails');
    Route::get('/category/{slug}/programs', 'MainController@CategoryPrograms');
    Route::get('/program/{slug}/courses', 'MainController@ProgramCourses');
    Route::get('/course/{slug}', 'MainController@CourseDetails');
    Route::post('/program/{program_id}', 'MainController@EnrollProgram'); // enroll in program
    Route::post('/program/{program_slug}/course/{course_id}', 'MainController@EnrollCourseProgram'); // enroll in program
    Route::post('/program/{program_slug}/course/{course_id}/lesson/{lesson_id}', 'MainController@LessonProgramDetails'); // enroll in program
    Route::get('/enrolled_lessons/{course_slug}/{program_slug}', 'MainController@EnrolledProgramLessons');

    // browse routes
    Route::get('/courses', 'MainController@Courses');
    Route::post('/course/{course_id}', 'MainController@EnrollCourse'); // enroll in course
    Route::get('/course/{slug}/lessons', 'MainController@Lessons'); // get all lessons
    Route::get('/lesson/{lesson_id}/course/{course_id}', 'MainController@LessonDetails'); // get lesson details
    Route::get('/enrolled_lessons/{course_slug}', 'MainController@EnrolledBrowseLessons');


    // articles routes
    Route::get('/articles', 'MainController@Articles');
    Route::post('/add-article', 'MainController@AddArticle');
    Route::get('/article/{article_slug}', 'MainController@GetArticle');
    Route::get('/category/{category_slug}/articles', 'MainController@CategoryArticles');

    // exams routes
    Route::get('/exams', 'MainController@Exams');
    Route::get('/exam/{exam_slug}/questions', 'MainController@Questions');
});

Route::get('/{vue_capture?}', function () {
    return view('home');
})->where('vue_capture', '[\/\w\.-]*');
