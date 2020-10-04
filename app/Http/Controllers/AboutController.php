<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\komentar;
class AboutController extends Controller
{
    public function about(){
        $komentarAll = komentar::All();
        $komentarAll= json_decode(json_encode($komentarAll));
        return view('about')->with(compact('komentarAll'));

         $value = Cache::rememberForever('articles', function(){
            return \app\articles::all();
        });

        $value = Cache::rememberForever('komentar', function(){
            return \app\komentar::all();
        });
    }
}
