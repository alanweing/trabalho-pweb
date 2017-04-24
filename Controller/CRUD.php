<?php

require_once 'DAO.php';
require_once 'ENV.php';

class CRUD
{
    private static function GetSchemaName()
    {
        Env::Load('../env');
        return Env::Get('database');
    }

    public static function Insert($values)
    {
        $query = "INSERT INTO `" . self::GetSchemaName() . "`." . '`' . static::$table . '`' . ' (' . implode(', ', static::$fields) . ') ' . " VALUES($values)";

        $status = DAO::Instance()->Query($query);
        DAO::Instance()->connection->commit();

        return $status;
    }

    public static function Select($fields='*', $conditions=NULL, $order=NULL, $limit=NULL)
    {
        $query = "SELECT $fields FROM " . static::$table;

        if (!is_null($conditions))
            $query .= " WHERE $conditions";

        if (!is_null($order))
            $query .= " ORDER BY $order";

        if (!is_null($limit))
            $query .= " LIMIT $limit";

        return DAO::Instance()->Query($query);
    }

    public static function Update($newValues, $conditions)
    {
        $query = "UPDATE " . '`' . self::GetSchemaName() . '`.`' . static::$table . "` SET $newValues WHERE $conditions";

        return DAO::Instance()->Query($query);
    }

    public static function Delete($conditions)
    {
        $query = "DELETE FROM `". self::GetSchemaName() . '`.`' . static::$table . "` WHERE $conditions";
        return DAO::Instance()->Query($query);
    }

    public static function Query($query)
    {
        return DAO::Instance()->Query($query);
    }
}