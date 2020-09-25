<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
class articlesController extends Controller
{
    public function __invoke($id){
        $articles = Articles::find($id);
        $articles = json_decode(json_encode($articles));
        return view('articles', ['id'=>$id])->with(compact('articles'));
        
        $value = Cache::rememberForever("articles:id:$id", function() use ($id){
            return \app\articles::all();
        });
    }
}
