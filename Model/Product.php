<?php
require_once 'Controller/CRUD.php';

class Product extends CRUD
{
    protected static $fields = ['name', 'value', 'created_at', 'updated_at'];
    protected static $table = 'products';
}