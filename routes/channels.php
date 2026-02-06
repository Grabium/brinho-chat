<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('receiver.{userId}_talk.{talkId}', function ($user, $userId, $talkId) {
    dd(session('talk_id'));
    return (((int) $user->id === (int) $userId) && (session('talk_id') === (string) $talkId));
});