<?php

namespace App\Repositories;


use App\Models\Vehicle;

class VehicleRepository implements VehicleInterface
{
    protected $vehicle = null;

    public function getAllVehicles(): object
    {
        return Vehicle::all();
    }

    public function getVehicleById($id): object
    {
        return Vehicle::find($id);
    }


}
