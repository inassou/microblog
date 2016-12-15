<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController {

    public function index()
    {
        $title = "Page d'acceuil";
        return view('truewelcome', ['title' => $title]);
    }
}

