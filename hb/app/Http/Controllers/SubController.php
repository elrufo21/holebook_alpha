<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubController extends Controller
{
    //
    public function index(){
        return view('sub.sub');
    }
    public function paypall(){
        return view('sub.paypall');
    }
}
