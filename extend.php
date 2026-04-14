<?php

namespace AutoActivateUsers;

use Flarum\Extend;
use Flarum\User\Event\Registered;

return [
    (new Extend\Event)
        ->listen(Registered::class, function (Registered $event) {
            $user = $event->user;

            // Confirm email + activate user
            $user->activate();
            $user->save();
        }),
];