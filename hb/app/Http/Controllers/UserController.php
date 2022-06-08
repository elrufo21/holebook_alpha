<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $user = User::paginate();
        return view('user.user_p',compact('user'));
    }
    public function edit(User $user){
        return view('user.img',compact('user'));
    }
    public function update(Request $request,User $user){
        $user->imgPortada = $request->imgPortada;
        $user->imgPerfil = $request->imgPerfil;

        $user->save();
        return redirect()->route('user.index');
    }
    public function subs(User $user){
        $user->role='subs';
        $user->save();
        return redirect()->route('user.index');
    }
}
