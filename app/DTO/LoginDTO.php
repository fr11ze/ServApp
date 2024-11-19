<?php

namespace App\DTO;

class LoginDTO
{
    public $username;
    public $password;

    public function __construct(array $data)
    {
        $this->username = $data['username'];
        $this->password = $data['password'];
    }
}
