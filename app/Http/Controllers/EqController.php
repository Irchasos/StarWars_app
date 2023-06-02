<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EqController extends Controller
{
    public function  myEq(){
        $user = Auth::user();
        return view ('eq.my_eq')->with(compact('user'));

}
    public function  store(){
        $user = Auth::user();
        $products = Equipment::all();
        return view ('eq.store')->with(compact('user'))->with(compact('products'));

    }
}
