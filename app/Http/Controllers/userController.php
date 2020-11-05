<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class userController extends Controller
{
    public function __invoke($id){
        $user = user::find($id);
        $user = json_decode(json_encode($user));
        return view('user', ['id'=>$id])->with(compact('user'));

        $value = Cache::rememberForever("user:id:$id", function() use ($id){
            return \app\users::all();
        });
    }
    public function index()
    {
     $user = user::all();
    return view('manage3',['user' => $user]);
    }

    public function add3()
    {
    return view('adduser');
    }
    
    public function create3(Request $request)
    {
        komentar::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'roles' =>$request->roles
        ]);
    return redirect('/manage3');
    }

    public function edit3($id)
    {
    $users=users::find($id);
    return view('edituser',['uses'=>$users]);
    }

    public function update3($id, Request $request)
    {
        $user = users::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->roles=$request->roles;
        $user->save();
        return redirect('/manage3');
    }

    public function delete3($id)
    {
        $user = user::find($id);
        $user->delete();
        return redirect('/manage3');

    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}