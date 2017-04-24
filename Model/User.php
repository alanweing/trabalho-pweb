<?php
require_once 'Controller/CRUD.php';

class User extends CRUD
{
    protected static $fields = ['name', 'mail', 'password'];
    protected static $table = 'users';
}