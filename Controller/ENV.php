<?php

final class Env
{
    private static $data;

    public static function Load(string $file = 'env')
    {
        return self::$data = parse_ini_file($file);
    }

    public static function Get(string $param)
    {
        return self::$data[$param];
    }

    public static function GetMySQLConf()
    {
        return array(self::Get('host'), self::Get('user'), self::Get('password'), self::Get('database'));
    }
}