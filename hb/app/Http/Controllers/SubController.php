<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
