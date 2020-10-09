<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Articles;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

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
            Cache::remember('articles', 5, function(){
                return Articles::all();
    
        });
            $articles = Cache::get('articles');
            return view('Home1')->with(compact('articles'));
        
    }
}
