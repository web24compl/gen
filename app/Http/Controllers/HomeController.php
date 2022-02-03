<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $footers = Footer::all();

        return view('home',['footers' => $footers]);
    }
    
    public function generate($id){
        $footer = Footer::find($id);

        return view('footer', ['footer'=>$footer]);
    }
}
