<?php
declare(strict_types=1);
namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('layouts.layout');
    }

    public function entrance()
    {
        return view('layouts.entrance');
    }
}
