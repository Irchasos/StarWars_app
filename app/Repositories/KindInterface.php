<?php

namespace App\Repositories;


interface KindInterface
{
    public function getAllKinds();

    public function getKindById($id);

}
