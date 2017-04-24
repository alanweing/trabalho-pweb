<?php

final class Debug
{
    public static function DD($object)
    {
        echo '<pre>';
        print_r($object);
        echo '</pre>';

        die();
    }
}