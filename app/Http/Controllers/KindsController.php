<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Kind;
use App\Services\KindService;
use Illuminate\View\View;

class KindsController extends Controller
{
    private $service;

    public function __construct(KindService $service)
    {
        $this->service = $service;
    }

    public function index(): view
    {
        $kinds = $this->service->indexData();

        return view('kinds.index', compact('kinds'));
    }

    public function show(Kind $kind): View
    {
        $this->service->showData($kind);

        return view('kinds.show')->with('kind', $kind);
    }
}
