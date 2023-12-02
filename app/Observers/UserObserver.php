<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    /**
     * @param User $user
     * @return void
     */
    public function created(User $user): void
    {
        $user->profile()->create();
    }
}
