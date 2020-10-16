<?php

namespace App\Http\Controllers\WeConnected;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function Categories()
    {
        return DB::table('categories')->select('id', 'category_name', 'category_slug','category_description')->get();
    }

    public function CourseDetails($slug)
    {
        $details = DB::table('courses')->where('courses.course_slug', $slug)->get();
        $enrolled_courses = DB::table('course_user')
        ->join('users', 'users.id', '=', 'course_user.user_id')
        ->join('courses', 'courses.id', '=', 'course_user.course_id')
        ->select('courses.course_slug')
        ->where('users.id', Auth::id())
        ->where('course_user.program_id','=',null)
        ->get();
        
        return [$details,$enrolled_courses];
    }

    public function Courses()
    {
        return DB::table('courses')
        ->select('courses.*')
        ->get();
    }

    public function EnrollCourse($course_id)
    {
        $hasEnrolled = DB::table('course_user')
            ->where([
                ['user_id', '=', Auth::id()],
                ['course_id', '=', $course_id],
                ['program_id', '=', null]
            ])->get();
        if ($hasEnrolled->count() < 1) {
            DB::table('course_user')->insertOrIgnore(
                ['user_id' => Auth::id(), 'course_id' => $course_id, 'created_at' => NOW(), 'updated_at' => NOW()]
            );
        }
    }

    public function Lessons($slug)
    {
        return DB::table('lessons')
            ->join('courses', 'courses.id', '=', 'lessons.course_id')
            ->where('courses.course_slug', $slug)
            ->select('lessons.*')
            ->get();
    }

    public function LessonDetails($lesson_id, $course_id)
    {
        $hasEnrolled = DB::table('lesson_user')
            ->where([
                ['user_id', '=', Auth::id()],
                ['lesson_id', '=', $lesson_id],
                ['course_id', '=', $course_id],
                ['program_id', '=', null]
            ])->get();
        if ($hasEnrolled->count() < 1) {
            DB::table('lesson_user')->insertOrIgnore(
                ['user_id' => Auth::id(), 'lesson_id' => $lesson_id, 'course_id' => $course_id, 'created_at' => NOW(), 'updated_at' => NOW()]
            );

            $taken_lessons = DB::table('lesson_user')
                ->join('users', 'users.id', '=', 'lesson_user.user_id')
                ->join('lessons', 'lessons.id', '=', 'lesson_user.lesson_id')
                ->where('lesson_user.user_id', Auth::id())
                ->where('lesson_user.course_id', $course_id)
                ->where('lesson_user.program_id', null)
                ->count();

            $all_lessons = DB::table('lessons')
                ->join('courses', 'courses.id', '=', 'lessons.course_id')
                ->where('courses.id', $course_id)
                ->count();

            if ($taken_lessons == $all_lessons) {
                DB::table('course_certificate')->insertOrIgnore(
                    ['user_id' => Auth::id(), 'course_id' => $course_id, 'created_at' => NOW(), 'updated_at' => NOW()]
                );
            }
        }

        return DB::table('lessons')->where('lessons.id', $lesson_id)->get();
    }

    public function EnrolledBrowseLessons($course_slug)
    {
        $enrolled_lessons = DB::table('lesson_user')
        ->join('users', 'users.id', '=', 'lesson_user.user_id')
        ->join('lessons', 'lessons.id', '=', 'lesson_user.lesson_id')
        ->join('courses', 'courses.id', '=', 'lesson_user.course_id')
        ->where('users.id', Auth::id())
        ->where('lesson_user.program_id','=',null)
        ->where('courses.course_slug','=',$course_slug)
        ->select('lessons.lesson_slug')
        ->get();
        
        return [$enrolled_lessons];
    }

    public function CategoryDetails($slug)
    {
        return DB::table('categories')->where('categories.category_slug', $slug)->get();
    }

    public function CategoryPrograms($slug)
    {
        $programs = DB::table('programs')
            ->join('categories', 'categories.id', '=', 'programs.category_id')
            ->select('programs.id', 'program_name', 'program_slug')
            ->where('categories.category_slug', $slug)
            ->get();
        $enrolled_programs = DB::table('program_user')
        ->join('users', 'users.id', '=', 'program_user.user_id')
        ->join('programs', 'programs.id', '=', 'program_user.program_id')
        ->select('programs.program_slug')
        ->where('users.id', Auth::id())
        ->get();

        return [$programs,$enrolled_programs];
    }

    public function ProgramCourses($slug)
    {
        $all_courses = DB::table('course_program')
            ->join('programs', 'programs.id', '=', 'course_program.program_id')
            ->join('courses', 'courses.id', '=', 'course_program.course_id')
            ->select('courses.id', 'course_name', 'course_slug','course_image')
            ->where('programs.program_slug', $slug)
            ->get();

        $enroll_courses = DB::table('course_user')
            ->join('users', 'users.id', '=', 'course_user.user_id')
            ->join('courses', 'courses.id', '=', 'course_user.course_id')
            ->join('programs', 'programs.id', '=', 'course_user.program_id')
            ->where('users.id', Auth::id())
            ->where('programs.program_slug', $slug)
            ->select('courses.id')
            ->get();

        return [$all_courses, $enroll_courses];
    }

    public function EnrollProgram($program_id)
    {
        $hasEnrolled = DB::table('program_user')
            ->where([
                ['user_id', '=', Auth::id()],
                ['program_id', '=', $program_id]
            ])->get();
        if ($hasEnrolled->count() < 1) {
            DB::table('program_user')->insertOrIgnore(
                ['user_id' => Auth::id(), 'program_id' => $program_id, 'created_at' => NOW(), 'updated_at' => NOW()]
            );

            $courseID = DB::table('course_program')
                ->join('courses', 'courses.id', '=', 'course_program.course_id')
                ->join('programs', 'programs.id', '=', 'course_program.program_id')
                ->where('programs.id', $program_id)
                ->where('course_program.order', 1)
                ->select('course_program.course_id')
                ->get();
            DB::table('course_user')->insertOrIgnore(
                ['user_id' => Auth::id(), 'course_id' => $courseID[0]->course_id, 'program_id' => $program_id, 'created_at' => NOW(), 'updated_at' => NOW()]
            );
        }
    }

    public function EnrollCourseProgram($program_slug, $course_id)
    {
        $program_id = DB::table('programs')
            ->where('programs.program_slug', $program_slug)
            ->select('id')
            ->get();

        $hasEnrolled = DB::table('course_user')
            ->where([
                ['user_id', '=', Auth::id()],
                ['course_id', '=', $course_id],
                ['program_id', '=', $program_id[0]->id],
            ])->get();
        if ($hasEnrolled->count() < 1) {
            DB::table('course_user')->insertOrIgnore(
                ['user_id' => Auth::id(), 'course_id' => $course_id, 'program_id' => $program_id[0]->id, 'created_at' => NOW(), 'updated_at' => NOW()]
            );
        }
    }

    public function LessonProgramDetails($program_slug, $course_id, $lesson_id)
    {
        $alert = "";

        $program = DB::table('programs')
            ->where('programs.program_slug', $program_slug)
            ->select('id')
            ->get();
        $program_id = $program[0]->id;

        $hasEnrolled = DB::table('lesson_user')
            ->where([
                ['user_id', '=', Auth::id()],
                ['lesson_id', '=', $lesson_id],
                ['course_id', '=', $course_id],
                ['program_id', '=', $program_id],
            ])->get();
        if ($hasEnrolled->count() < 1) {
            DB::table('lesson_user')->insertOrIgnore(
                ['user_id' => Auth::id(), 'lesson_id' => $lesson_id, 'course_id' => $course_id, 'program_id' => $program_id, 'created_at' => NOW(), 'updated_at' => NOW()]
            );

            $taken_lessons = DB::table('lesson_user')
                ->join('users', 'users.id', '=', 'lesson_user.user_id')
                ->join('lessons', 'lessons.id', '=', 'lesson_user.lesson_id')
                ->where('lesson_user.user_id', Auth::id())
                ->where('lesson_user.course_id', $course_id)
                ->where('lesson_user.program_id', $program_id)
                ->count();

            $all_lessons = DB::table('lessons')
                ->join('courses', 'courses.id', '=', 'lessons.course_id')
                ->where('courses.id', $course_id)
                ->count();

            if ($taken_lessons == $all_lessons) {

                $course_order = DB::table('course_program')
                    ->join('courses', 'courses.id', '=', 'course_program.course_id')
                    ->join('programs', 'programs.id', '=', 'course_program.program_id')
                    ->where('courses.id', $course_id)
                    ->where('programs.id', $program_id)
                    ->select('course_program.order')
                    ->distinct()
                    ->get();

                $new_course_id = DB::table('course_program')
                    ->join('courses', 'courses.id', '=', 'course_program.course_id')
                    ->join('programs', 'programs.id', '=', 'course_program.program_id')
                    ->where('programs.id', $program_id)
                    ->where('course_program.order', $course_order[0]->order + 1)
                    ->select('course_program.course_id')
                    ->distinct()
                    ->get();

                if ($new_course_id->isEmpty()) {
                    DB::table('program_certificate')->insertOrIgnore(
                        ['user_id' => Auth::id(), 'program_id' => $program_id, 'created_at' => NOW(), 'updated_at' => NOW()]
                    );
                    $alert = "certificate";
                } else {
                    DB::table('course_user')->insertOrIgnore(
                        ['user_id' => Auth::id(), 'course_id' => $new_course_id[0]->course_id, 'program_id' => $program_id, 'created_at' => NOW(), 'updated_at' => NOW()]
                    );
                    $alert = "newcourse";
                }
            }
        }

        $lessonDetails = DB::table('lessons')->where('lessons.id', $lesson_id)->get();
        return [$lessonDetails,$alert];
    }

    public function EnrolledProgramLessons($course_slug,$program_slug)
    {
        $enrolled_lessons = DB::table('lesson_user')
        ->join('users', 'users.id', '=', 'lesson_user.user_id')
        ->join('lessons', 'lessons.id', '=', 'lesson_user.lesson_id')
        ->join('courses', 'courses.id', '=', 'lesson_user.course_id')
        ->join('programs', 'programs.id', '=', 'lesson_user.program_id')
        ->where('users.id', Auth::id())
        ->where('programs.program_slug','=',$program_slug)
        ->where('courses.course_slug','=',$course_slug)
        ->select('lessons.lesson_slug')
        ->get();
        
        return [$enrolled_lessons];
    }

    public function Articles()
    {
        $articles = DB::table('articles')
            ->join('users', 'users.id', '=', 'articles.user_id')
            ->select('articles.*', 'users.name as username')
            ->get();
        $categories = DB::table('categories')->get();
        return [$articles, $categories];
    }

    public function AddArticle(Request $request)
    {
        $this->validate($request, [
            'title'           => 'required|min:5|max:100',
            'subtitle'       => 'required|min:5|max:100',
            'slug'            => 'required|min:5|max:100|unique:articles,slug',
            'body'     => 'required|min:20',
            'image'           => 'required',
        ]);

        if ($request->image) {
            $name = time() . '.' . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
            \Image::make($request->image)->save(public_path('images/blog/') . $name);
            $image = $name;
        }

        $article = DB::table('articles')->insertOrIgnore(
            [
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'body' => $request->body,
                'slug' => $request->slug,
                'image' => $image,
                'user_id' => Auth::id(),
                'created_at' => NOW(),
                'updated_at' => NOW()
            ]
        );
        if ($article) {
            $article_id = DB::table('articles')->select('id')->where('articles.slug', '=', $request->slug)->get();

            // insert categories for the article
            for ($i = 0; $i < sizeof($request->cat_selected); $i++) {
                DB::table('article_category')->insertOrIgnore([
                    ['article_id' => $article_id[0]->id, 'category_id' => $request->cat_selected[$i]['id']],
                ]);
            }
        }
    }

    public function GetArticle($article_slug)
    {
        $article = DB::table('articles')
            ->join('users', 'users.id', '=', 'articles.user_id')
            ->where('articles.slug', '=', $article_slug)
            ->select('articles.*', 'users.name as username')
            ->get();
        $categories = DB::table('article_category')
            ->join('articles', 'articles.id', '=', 'article_category.article_id')
            ->join('categories', 'categories.id', '=', 'article_category.category_id')
            ->where('articles.slug','=',$article_slug)
            ->select('categories.*')
            ->get();
        return [$article, $categories];
    }

    public function CategoryArticles($category_slug)
    {
        $articles = DB::table('article_category')
            ->join('articles', 'articles.id', '=', 'article_category.article_id')
            ->join('categories', 'categories.id', '=', 'article_category.category_id')
            ->join('users', 'users.id', '=', 'articles.user_id')
            ->where('categories.category_slug','=',$category_slug)
            ->select('articles.*', 'users.name as username')
            ->get();
        return $articles;
    }

    public function Exams()
    {
        return DB::table('exams')->get();
    }
    public function Questions($exam_slug)
    {
        return DB::table('questions')
        ->join('exams','exams.id','=','questions.exam_id')
        ->where('exams.exam_slug','=', $exam_slug)
        ->select('questions.*')
        ->get();
    }
}
