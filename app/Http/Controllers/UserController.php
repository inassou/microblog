<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{

    public function index()
    {
        $user = User::get();
        return view('user', compact('user'));
    }

    public function create()
    {
        return view('user');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function store(Request $request)
    {
       // return 'Le nom est ' . $request->input('nom');
    }
}
