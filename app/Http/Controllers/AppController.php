<?php

namespace App\Http\Controllers;

use App\Models\Projectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class AppController extends Controller
{
    public function index()
    {
        $rowset = Projectos::where('activo', 1)->where('projects', 1)->orderBy('created_at', 'ASC')->limit('3')->get();
        return view('app.index',[
            'rowset' => $rowset
        ]);
    }
    public function portfolio()
    {
        $rowset = Projectos::where('activo', 1)->where('projects', 1)->get();
        return view('app.portfolio',[
            'rowset' => $rowset
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

    public function enviar(Request $request){
        $data = [
            'name' => $request->get('name'),
            'email'=>$request->get('email'),
            'asunto'=>$request->get('subject'),
            'msg'=>$request->get('msg')
        ];
        if (!isset($_SESSION['formulario'])) {

            Mail::to('pablohg.contact@gmail.com')->send(new TestMail($data));
        }
        return view('app.contact');
    }

    public function proyecto($slug){
        $rowset = Projectos::where('slug',$slug)->limit(1)->get();
        return view('app.proyecto',['rowset' => $rowset]);
    }

}
