<?php

namespace App\Repositories;

interface VehicleInterface
{
    public function getAllVehicles();

    public function getVehicleById($id);

}
