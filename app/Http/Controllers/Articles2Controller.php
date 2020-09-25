<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\articles;
class Articles2Controller extends Controller
{
    public function getAll(){
        $articles = articles::all();
        return view('home',['articles=> $articles']);
        }

        public function getById($id){
        $articles = articles::find($id);
        return view('articles',['articles=> $articles']);
        }
       
}
