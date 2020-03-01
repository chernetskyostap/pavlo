<?php

namespace App\Controllers;

use App\Helpers\Validate;
use App\Helpers\ViewHelper;
use App\Models\Task;

class TaskController
{
    public function index(): void
    {
        $result = (new Task)->getTasks();

        ViewHelper::showPage('tasks', $result);
    }

    public function update(): bool
    {
        $updatedFields = [];
        foreach (Task::RULES as $field => $rule) {
            if (isset($_POST[$field]) && !Validate::$rule($_POST[$field])) {
                return false;
            }
            $updatedFields[$field] = $_POST[$field];
        }

        return (new Task)->updateTask($_POST);
    }

    public function create(): bool
    {
        foreach (Task::RULES as $field => $rule) {
            if (isset($_POST[$field]) && Validate::$rule($_POST[$field])) {
                continue;
            }
            return false;
        }
        $_POST['parent_id'] ??= 0;

        return (new Task)->addTask($_POST);
    }

}