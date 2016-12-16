<?php
/**
 * Created by PhpStorm.
 * User: ineselbouatmani
 * Date: 15/12/2016
 * Time: 23:56
 */
namespace App\Http\Controllers;

use App\Post;
use App\Comments;
use Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CommentsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(request $request)
    {
        //on_post, from_user, body
        $input['name'] = $request->user()->id;
        $input['on_post'] = $request->input('on_post');
        $input['content'] = $request->input('content');
        $slug = $request->input('slug');
        Comments::create( $input );

        return redirect($slug)->with('message', 'Commentaire publié');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
