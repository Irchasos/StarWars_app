<?php

namespace App\Http\Controllers;
use Livewire\WithPagination;


use App\Models\Equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EqController extends Controller
{
    use WithPagination;

    public function  myEq(){
        $user = Auth::user();
        return view ('eq.my_eq')->with(compact('user'));

}



}
