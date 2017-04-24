<?php
require_once '../Controller/CRUD.php';

class Product extends CRUD
{
    protected static $fields = ['`name`', '`value`'];
    protected static $table = 'products';
}