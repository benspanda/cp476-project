<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Courses as Courses;
use \App\UserXCourse as UserXCourse;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // render index
    public function index()
    {
        // if the user is logged in, show a list of there chats
        if(Auth::check()) {
            $user = Auth::user();

            return view('my-chats', compact('user'));
        }
        
        return view('index');
    }

    // render join course page
    public function joinCourse()
    {
        return view('join-course');
    }

    // render create course page
    public function createCourse()
    {
        return view('create-course');
    }

    // render create course page
    public function about()
    {
        return view('about');
    }

    // create a course
    public function actionCreateCourse()
    {
        // create the new course
        $course = new Courses();
        $course->user_id = Auth::id();
        $course->name = $_POST['name'];
        $course->code = $_POST['code'];
        $course->access_code = str_random(16);
        $course->save();

        $user_x_course = new UserXCourse();
        $user_x_course->user_id = Auth::id();
        $user_x_course->course_id = $course->id;
        $user_x_course->admin = 1;
        $user_x_course->save();

        return redirect('course/' . $course->id);
    }

    // view course
    public function viewCourse()
    {
        return view('chat');
    }
}
