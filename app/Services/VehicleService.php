<?php

namespace App\Services;

use App\Repositories\VehicleInterface;
use Illuminate\Support\Collection;

class VehicleService
{
    private $vehicle;

    public function __construct(VehicleInterface $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function indexData(): Collection
    {
        return $this->vehicle->getAllVehicles();
    }

    public function showData($id): Collection
    {
        return $this->vehicle->getVehicleById($id);
    }

}
