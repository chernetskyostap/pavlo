<?php

namespace App\Models;

use App\Helpers\Validate;

class Task extends Model
{
    public const RULES = [
        'date' => 'date',
        'title' => 'isEmpty',
        'body' => 'isEmpty'
    ];

    public function getTasks(): ?array
    {
        $result = $this->db->query('SELECT * FROM tasks');

        if (!$result) {
            return [];
        }
        return $result;
    }

    public function updateTask(array $task): bool
    {
        $query = 'UPDATE tasks SET';
        foreach ($task as $field => $value) {
            $query .= $field . ' = ' . $value;
        }
        $query .= 'WHERE id =' . $_POST[$id];

        if (!is_array($this->db->query($query))) {
            return false;
        }

        $this->checkChildTasks();
        return true;
    }

    public function deleteTask(): bool
    {
        $query = 'DELETE from tasks WHERE id =' . $id . ' OR parent_id = ' . $id;
        if (!$this->db->query($query)) {
            return false;
        }

        return true;
    }

    public function addTask(array $task): bool
    {
        $query = 'INSERT INTO tasks(date, title, body, password, parent_id) VALUES ("'
            . $task['date'] . '","'
            . $task['title'] . '","'
            . $task['body'] . '","'
            . $task['parent_id'] . '")';

        return !($this->db->query($query) === false);
    }

    public function checkParentTasks(): void
    {

    }
}