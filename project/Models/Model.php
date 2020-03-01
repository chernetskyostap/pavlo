<?php

namespace App\Models;

use App\Database\Db;

class Model
{
    protected Db $db;

    public function __construct()
    {
        $this->db = new Db;
    }
}