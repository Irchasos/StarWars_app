<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Hierarchy;

class UserObserver
{
    public function created(User $user)
    {
        // Sprawdź, czy użytkownik ma przełożonego
        if ($user->boss_id !== null) {
            // Utwórz wpis w tabeli hierarchies
            Hierarchy::create([
                'employer_id' => $user->id,
                'boss_id' => $user->boss_id,
            ]);
        }
    }
}