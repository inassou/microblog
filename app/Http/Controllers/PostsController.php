<?php

namespace App\Http\Controllers;

use App\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
//use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PostsController extends Controller
{
    public function index()
    {

        $posts = Post::get();
        return view('posts.index', compact('posts'));

        }

    public function store()
    {
        $post = Post::create(request()->all());

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




        public function update($id)
    {
        $post = Post::findOrFail($id);

        $post->update(request()->all());

        return redirect(route('news.index'));

    }



        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return Response
         */

      /**dd(\Request::all());
       * $post =findOrFail($id);
        $post->update($request->all());
        redirect(route('news'));
         */


    public function create()
    {
        /*if($request->user()->can_post())
        {
            return view('posts.create');
        }
        else
        {
            return redirect('/')->withErrors('You have not sufficient permissions for writing post');
        }*/
        return view('posts.create');

    }


}
