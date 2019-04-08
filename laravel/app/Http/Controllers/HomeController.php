<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        echo 'stank';
    }
}
