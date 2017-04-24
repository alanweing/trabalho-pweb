<?php
require_once '../Controller/CRUD.php';

class User extends CRUD
{
    protected static $fields = ['name', 'mail', 'password', 'created_at', 'updated_at'];
    protected static $table = 'users';
}