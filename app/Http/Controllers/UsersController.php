<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',[
           'except'=>['create','store']
        ]);
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|unique:users|max:50',
            'email'=>'required|email|unique:users|max:255',
            'password'=>'required|confirmed|min:6',
        ]);
        $user=User::create(
            [
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
            ]
        );
        Auth::login($user);
        session()->flash('success','欢迎，您将在这里开启一段新的旅程!');
        return redirect()->route('users.show',[$user]);
    }

    public function show(User $user){
        return view('users.show',compact('user'));
    }
}