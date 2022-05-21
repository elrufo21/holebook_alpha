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
}
