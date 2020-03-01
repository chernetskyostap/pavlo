<?php

namespace App\Controllers;

use App\Helpers\ViewHelper;
use App\Models\User;
use App\Models\Task;

class AuthController
{
    public function getLogin(): void
    {
        $task = new Task;

        var_dump((new TaskController())->create());

        //ViewHelper::showPage('login');
    }

    public function login(): void
    {
        $_SESSION['email'] = 'test';

        ViewHelper::showPage('login');
    }

    public function logout(): void
    {
        if (session_destroy()) {
            header('Location: login');
        }
    }
}