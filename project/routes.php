<?php

return [
    '/login' => [
        'controller' => 'AuthController',
        'function' => [
            'GET' => 'getLogin',
            'POST' => 'login'
            ]
    ],
    '/tasks' => [
        'controller' => 'TaskController',
        'function' => [
            'GET' => 'index'
        ]
    ],
    '/logout' => [
        'controller' => 'AuthController',
        'function' => [
            'GET' => 'logout'
        ]
    ]
];

