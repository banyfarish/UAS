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

        $value = Cache::rememberForever('komentar', function(){
            return \app\komentar::all();
        });
}
}