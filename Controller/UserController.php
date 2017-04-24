<?php

require_once 'Model/User.php';

class UserController
{
    public static function Create(string $name, string $mail, string $password)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        return User::Insert("$name, $mail, $hashedPassword");
    }

    public static function Validate(string $mail, string $password)
    {
        $user = User::Select($conditions="WHERE mail=$mail", $limit=1);

        if ($row = $user->fetch_assoc())
        {
            return password_verify($password, $row['password']);
        }

        return FALSE;
    }
}