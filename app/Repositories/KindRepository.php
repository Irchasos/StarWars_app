<?php

namespace App\Repositories;

use App\Models\Kind;

class KindRepository implements KindInterface
{
    protected $kind = null;

    public function getAllKinds(): object
    {
        return Kind::all();
    }

    public function getKindById($id): object
    {
        return Kind::find($id);
    }


}
