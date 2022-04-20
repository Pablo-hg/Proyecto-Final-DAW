<?php

namespace App\Http\Controllers;

class AppController extends Controller
{
    public function index()
    {
        return view('app.index',[
        ]);
    }
    public function projects()
    {
        return view('app.projects',[
        ]);
    }
    public function roadmap()
    {
        return view('app.roadmap');
    }
    public function contact()
    {
        return view('app.contact');
    }
}
