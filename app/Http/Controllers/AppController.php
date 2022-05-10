<?php

namespace App\Http\Controllers;

use App\Models\Projectos;

class AppController extends Controller
{
    public function index()
    {
        $rowset = Projectos::where('activo', 1)->where('home', 1)->orderBy('fecha', 'ASC')->get();
        return view('app.index',[
            'rowset' => $rowset
        ]);
    }
    public function portfolio()
    {
        return view('app.portfolio',[
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
