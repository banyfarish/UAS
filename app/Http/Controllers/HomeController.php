<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
class HomeController extends Controller
{
    public function home(){
        $articlesAll = articles::All();
        $articles= json_decode(json_encode($articlesAll));
        return view('home')->with(compact('articlesAll'));

        $value = Cache::rememberForever('articles', function(){
            return \app\articles::all();
        });
    }
}
