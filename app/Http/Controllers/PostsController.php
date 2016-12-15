<?php

namespace App\Http\Controllers;

//use App\Request;
use App\Http\Controllers\Controller;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PostsController extends Controller
{
    public function index()
    {

        $posts = Post::get();
        return view('posts.index', compact('posts'));

        }

    public function store(request $request)
    {
       // $post = Post::create();
        $post = new Post();

        $title = $request->input('title');
        $post->title = $title;

        $post->slug = str_slug($post->title);

        $theme = $request->input('theme');
        $post->theme = $theme;

        $post->content = $request->input('content');

       // $name = $request->input('name');
       // $post->name = $name;

        $post->name = $request->user()->name;

        $request->has('save');
        $post->save();
        return redirect(route('news.index'));
    }


    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        if ($post) {
            if ($post->active == false)
                return redirect('/')->withErrors('requested page not found');
            $comments = $post->comments;
        } else {
            return redirect('/')->withErrors('requested page not found');
        }
        return view('posts.show')->withPost($post)->withComments($comments);
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }




        public function update($id, Request $request)
    {
        $post = Post::findorFail($id);
        $title = $request->input('title');
        $post->title = $title;
        $theme = $request->input('theme');
        $post->theme = $theme;

        $post->content = $request->input('content');
        $request->has('save');
        $post->save();
        return redirect(route('news.index'));
    }


<<<<<<< HEAD

=======
>>>>>>> master
    public function create()
    {

        return view('posts.create');

    }


}
