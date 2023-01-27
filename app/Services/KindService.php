<?php

namespace App\Services;


use App\Repositories\KindInterface;
use Illuminate\Support\Collection;

class KindService
{
    private $kind;

    public function __construct(KindInterface $kind)
    {
        $this->kind = $kind;
    }

    public function indexData(): Collection
    {
        return $this->kind->getAllKinds();
    }

    public function showData($id): Collection
    {
        return $this->kind->getKindById($id);
    }

}
