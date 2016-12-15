<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Post;



class UserController extends Controller
{

   /* public function index()
    {
        $user = User::get();
        return view('user', compact('user'));
    } */


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user');
    }

    public function user_posts($id)
    {
        //
        $posts = Post::where('name',$id)->orderBy('created_at','desc')->paginate(5);
        $title = User::find($id)->name;
        return view('news')->withPosts($posts)->withTitle($title);
    }

    public function user_posts_all(Request $request)
    {
        //
        $user = $request->user();
        $posts = Post::where('name',$user->id)->orderBy('created_at','desc')->paginate(5);
        $title = $user->name;
        return view('news')->withPosts($posts)->withTitle($title);
    }

    public function user_posts_draft(Request $request)
    {
        //
        $user = $request->user();
        $posts = Post::where('name',$user->id)->orderBy('created_at','desc')->paginate(5);
        $title = $user->name;
        return view('news')->withPosts($posts)->withTitle($title);
    }

}
