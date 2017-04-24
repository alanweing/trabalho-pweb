<?php
require_once '../Model/Product.php';

switch ($_POST['action'])
{
    case 'create':
        Product::Insert("\"{$_POST['name']}\", {$_POST['value']}");
        return json_encode(Product::Select('*', NULL, 'id DESC', '1')->fetch_assoc());
        break;
    case 'update':
        $currentDate = date("Y-m-d H:i:s");
        Product::Update("`name`=\"{$_POST['name']}\",`value`=\"{$_POST['value']}\", `updated_at`=\"{$currentDate}\"", "id={$_POST['id']}");
        break;
    case 'delete':
        Product::Delete("id={$_POST['id']}");
        break;
}