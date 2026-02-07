<?php

use Illuminate\Support\Facades\Broadcast;
use App\Models\User;

Broadcast::channel('receiver.{userId}', function(User $user, $userId){
    $userVerified = ((int) $userId === (int) $user->id );
    return $userVerified;
});