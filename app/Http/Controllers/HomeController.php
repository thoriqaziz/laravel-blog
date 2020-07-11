<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard')
                ->with('posts_count', Post::all()->count())
                ->with('trashed_count', Post::onlyTrashed()->count())
                ->with('users_count', User::all()->count())
                ->with('categories_count', Category::all()->count());
    }
}
