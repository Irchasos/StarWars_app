<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(): view
    {
        return view('games.index',);
    }
}
