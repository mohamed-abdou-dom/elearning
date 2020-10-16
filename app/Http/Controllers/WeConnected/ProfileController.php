<?php

namespace App\Http\Controllers\WeConnected;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class ProfileController extends Controller
{
    public function GetProfile()
    {
        $user = DB::table('users')
            ->where('users.id', Auth::user()->id)
            ->select('users.*')
            ->get();

        return $user;
    }

    public function UpdateProfile(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required|string|min:5|max:100',
            'email'         => 'required|string|email|max:255|unique:users,email,' . Auth::user()->id,
            'newpassword'   => 'nullable|string|min:8|max:100',
            'country'       => 'nullable|string|min:2',
            'phone'         => 'nullable|string|min:11|max:11',
            // 'photo'         => 'nullable|max:20000|mimes:jpeg,png',
            'gender'        => 'nullable|integer',
            'bio'           =>  'nullable|min:20|max:500'
        ]);

        $user = User::findOrFail(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        if (!empty($request->newpassword)) {
            $user->password = Hash::make($request->newpassword);
        }
        $user->country = $request->country;
        $user->phone = $request->phone;

        if ($request->photo != $user->photo) {
            $name = time() . '.' . explode('/', explode(':', substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];
            \Image::make($request->photo)->save(public_path('/images/profile/') . $name);
            $photo = $name;
            $user->photo = $photo;
        }
        $user->gender = $request->gender;
        $user->bio = $request->bio;
        $user->save();
    }

    public function GetMyCourses()
    {
        return DB::table('course_user')
            ->join('users', 'users.id', '=', 'course_user.user_id')
            ->join('courses', 'courses.id', '=', 'course_user.course_id')
            ->where([
                ['users.id', '=', Auth::user()->id],
                ['course_user.program_id', '=', null]
            ])
            ->select('courses.*')
            ->get();
    }

    public function RemoveMyCourse($course_id)
    {
        DB::table('course_user')
            ->join('users', 'users.id', '=', 'course_user.user_id')
            ->join('courses', 'courses.id', '=', 'course_user.course_id')
            ->where('users.id', '=', Auth::id())
            ->where('courses.id', '=', $course_id)
            ->where('course_user.program_id', '=', null)
            ->delete();

        DB::table('lesson_user')
            ->join('users', 'users.id', '=', 'lesson_user.user_id')
            ->join('lessons', 'lessons.id', '=', 'lesson_user.lesson_id')
            ->join('courses', 'courses.id', '=', 'lesson_user.course_id')
            ->where('users.id', '=', Auth::id())
            ->where('courses.id', '=', $course_id)
            ->where('lesson_user.program_id', '=', null)
            ->delete();
    }

    public function GetMyCareers()
    {
        return DB::table('program_user')
            ->join('users', 'users.id', '=', 'program_user.user_id')
            ->join('programs', 'programs.id', '=', 'program_user.program_id')
            ->where('users.id', '=', Auth::user()->id)
            ->select('programs.*')
            ->get();
    }

    public function RemoveMyCareer($program_id)
    {
        DB::table('program_user')
            ->join('users', 'users.id', '=', 'program_user.user_id')
            ->join('programs', 'programs.id', '=', 'program_user.program_id')
            ->where('users.id', '=', Auth::id())
            ->where('programs.id', '=', $program_id)
            ->delete();

        DB::table('course_user')
            ->join('users', 'users.id', '=', 'course_user.user_id')
            ->join('courses', 'courses.id', '=', 'course_user.course_id')
            ->join('programs', 'programs.id', '=', 'course_user.program_id')
            ->where('users.id', '=', Auth::id())
            ->where('programs.id', '=', $program_id)
            ->delete();

        DB::table('lesson_user')
            ->join('users', 'users.id', '=', 'lesson_user.user_id')
            ->join('lessons', 'lessons.id', '=', 'lesson_user.lesson_id')
            ->join('courses', 'courses.id', '=', 'lesson_user.course_id')
            ->join('programs', 'programs.id', '=', 'lesson_user.program_id')
            ->where('users.id', '=', Auth::id())
            ->where('programs.id', '=', $program_id)
            ->delete();
    }

    public function CourseCertifications()
    {
        $course_certified = DB::table('course_certificate')
            ->join('users', 'users.id', '=', 'course_certificate.user_id')
            ->join('courses', 'courses.id', '=', 'course_certificate.course_id')
            ->where('users.id', '=', Auth::user()->id)
            ->select('courses.course_name', 'users.name as username', 'course_certificate.created_at', 'course_certificate.id')
            ->get();

        $program_certified = DB::table('program_certificate')
            ->join('users', 'users.id', '=', 'program_certificate.user_id')
            ->join('programs', 'programs.id', '=', 'program_certificate.program_id')
            ->where('users.id', '=', Auth::user()->id)
            ->select('programs.program_name', 'users.name as username', 'program_certificate.created_at', 'program_certificate.id')
            ->get();

        return [$course_certified, $program_certified];
    }

    public function RemoveMyCourseCertified($id)
    {
        DB::table('course_certificate')
            ->where('course_certificate.id', '=', $id)
            ->delete();
    }

    public function RemoveMyProgramCertified($id)
    {
        DB::table('program_certificate')
            ->where('program_certificate.id', '=', $id)
            ->delete();
    }

    public function GetMyArticles()
    {
        return DB::table('articles')
            ->join('users', 'users.id', '=', 'articles.user_id')
            ->where('users.id', '=', Auth::user()->id)
            ->select('articles.*')
            ->get();
    }

    public function RemoveMyArticle($id)
    {
        DB::table('articles')
            ->where('articles.id', '=', $id)
            ->delete();
    }

    public function EditArticle($slug)
    {
        $articles = DB::table('articles')
        ->where('articles.slug', '=', $slug)
        ->select('articles.*')
        ->get();

        $categories = DB::table('categories')
        ->select('categories.*')
        ->get();

        $cat_selected = DB::table('article_category')
        ->join('articles','articles.id','=','article_category.article_id')
        ->join('categories','categories.id','=','article_category.category_id')
        ->where('articles.slug','=',$slug)
        ->select('categories.id','categories.category_name','categories.category_slug')
        ->get();


        return [$articles,$categories,$cat_selected];
    }

    public function UpdateArticle(Request $request)
    {
        $this->validate($request, [
            'title'           => 'required|min:5|max:100',
            'subtitle'       => 'required|min:5|max:100',
            'slug'            => 'required|min:5|max:100|unique:articles,slug,'.$request->id,
            'body'     => 'required|min:20',
            'image'           => 'required',
        ]);

        if ($request->image) {
            $name = time() . '.' . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
            \Image::make($request->image)->save(public_path('images/weconnected/articles/') . $name);
            $image = $name;
        }

        $article = DB::table('articles')
        ->where('articles.slug','=',$request->slug)
        ->update(
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
            
            DB::table('article_category')
            ->join('articles','articles.id','=','article_category.article_id')
            ->where('articles.slug', '=', $request->slug)
            ->delete();
            
            // insert categories for the article
            for ($i = 0; $i < sizeof($request->cat_selected); $i++) {
                DB::table('article_category')->insertOrIgnore([
                    ['article_id' => $request->id, 'category_id' => $request->cat_selected[$i]['id']],
                ]);
            }
        }
    }
}
