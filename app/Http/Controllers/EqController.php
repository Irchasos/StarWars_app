<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EqController extends Controller
{
    public function  myEq(){
        $user = Auth::user();
        return view ('eq.my_eq')->with(compact('user'));

}
}
