<?php
declare(strict_types=1);
namespace App\Http\Controllers;


use App\Models\Photo;
use App\Models\Vehicle;
use App\Services\VehicleService;
use Illuminate\View\View;

class VehiclesController extends Controller
{
    private $service;

    public function __construct(VehicleService $service)
    {
        $this->service = $service;
    }

    public function index(): view
    {
        $vehicles = $this->service->indexData();

        return view('vehicles.index', compact('vehicles'));
    }

    public function show(Vehicle $vehicle): View
    {
        $this->service->showData($vehicle);
        $placeholder = Photo::where('photoable_type', "vehicle")->first();

        return view('vehicles.show')->with('vehicle', $vehicle)->with('placeholder', $placeholder);
    }
}
