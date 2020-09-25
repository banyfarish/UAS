<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return view('about');

         $value = Cache::rememberForever('articles', function(){
            return \app\articles::all();
        });
    }
}
