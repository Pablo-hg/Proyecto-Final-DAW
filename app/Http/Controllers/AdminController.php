<?php

namespace App\Http\Controllers;

use App\Models\Visitantes;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $rowset = Visitantes::all();

        return view('admin.index',[
            'rowset' => $rowset,
        ]);
    }

}
