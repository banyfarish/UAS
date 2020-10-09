<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use Illuminate\Support\Facades\Cache;
class HomeController extends Controller
{
    public function index(){
        Cache::remember('articles', 5, function(){
            return Article::all();

    });
        $articles = Cache::get('articles');
        return view('Home1')->with(compact('articles'));
    }
}