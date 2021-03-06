<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Post;



class UserController extends Controller
{

   public function index()
    {
        $user = User::get();
        $posts = Post::get();
        return view('user', compact('user'), compact ('posts'));
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('auth');
     }

    public function user_posts($id)
     {


         $user = User::get();
        //$posts = Post::where('author_id',$id)->orderBy('created_at','desc')->paginate(5);
         $posts = Post::where('name',$id)->orderBy('created_at','desc')->paginate(5);

         //$title = User::find($id)->name;
         return view('user', compact('user'))->withPost($posts);
     }

     /**
      * Show the application dashboard.
      *
      * @return \Illuminate\Http\Response
      */


}
