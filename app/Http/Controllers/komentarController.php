<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\komentar;
class komentarController extends Controller
{
    public function __invoke($id){
        $komentar = komentar::find($id);
        $komentar = json_decode(json_encode($komentar));
        return view('komentar', ['id'=>$id])->with(compact('komentar'));

        $value = Cache::rememberForever("komentar:id:$id", function() use ($id){
            return \app\komentar::all();
        });
    }
    public function index()
    {
     $komentar = komentar::all();
    return view('manage2',['komentar' => $komentar]);
    }

    public function add2()
    {
    return view('addkomentar');
    }
    
    public function create2(Request $request)
    {
        komentar::create([
            'name' => $request->name,
            'content' => $request->content,
            'featured_image' =>$request->image
        ]);
    return redirect('/manage2');
    }

    public function edit2($id)
    {
    $komentar=komentar::find($id);
    return view('editkomentar',['komentar'=>$komentar]);
    }

    public function update2($id, Request $request)
    {
        $komentar = komentar::find($id);
        $komentar->name=$request->name;
        $komentar->content=$request->content;
        $komentar->featured_image=$request->image;
        $komentar->save();
        return redirect('/manage2');
    }

    public function delete2($id)
    {
        $komentar = komentar::find($id);
        $komentar->delete();
        return redirect('/manage2');

    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}