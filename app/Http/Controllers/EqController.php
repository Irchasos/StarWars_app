<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class EqController extends Controller
{
    use WithPagination;

    public function myEq()
    {
        $user = Auth::user();
        return view('eq.my_eq')->with(compact('user'));

    }



}
