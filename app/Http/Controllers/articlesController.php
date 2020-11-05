<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use Illuminate\Support\Facades\Gate;
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

    public function index()
    {
     $articles = Articles::all();
    return view('manage',['articles' => $articles]);
    }

    public function add()
    {
    return view('addarticles');
    }
    
    public function create(Request $request)
    {
        Articles::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured_image' =>$request->image
        ]);
    return redirect('/manage');
    }

    public function edit($id)
    {
    $articles=articles::find($id);
    return view('editarticles',['articles'=>$articles]);
    }

    public function update($id, Request $request)
    {
        $articles = articles::find($id);
        $articles->title=$request->title;
        $articles->content=$request->content;
        $articles->featured_image=$request->image;
        $articles->save();
        return redirect('/manage');
    }

    public function delete($id)
    {
        $articles = articles::find($id);
        $articles->delete();
        return redirect('/manage');

    }
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(function($request, $next){
            if(Gate::allows('manage-articles')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
         });
           
    }
}
