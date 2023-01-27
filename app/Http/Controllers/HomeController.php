<?php
declare(strict_types=1);
namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('layout');
    }

    public function entrance()
    {
        return view('entrance');
    }
}
