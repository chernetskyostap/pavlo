<?php

namespace App\Models;

use App\Database\Db;

class User extends Model
{
    public function login(string $email, string $password): void
    {
        $result = $this->db->query('SELECT * FROM users');
        foreach ($result as $item) {
            echo $item['BODY'];
        }
    }

    public function getUser(string $email)
    {
       // $result = $this->db->query('SELECT * FROM users WHERE email =' . $email)
    }
}
