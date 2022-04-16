<?php

return [
    '/' => [
        'class' => \App\Controllers\MainController::class,
        'action' => 'main'
    ],
    '/home' => [
        'class' => \App\Controllers\MainController::class,
        'action' => 'home'
    ],
];
