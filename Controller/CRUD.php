<?php

require_once 'DAO.php';

class CRUD
{
    public static function Insert($values)
    {
        $query = "INSERT INTO " . static::$table . ' (' . static::$fields . ') ' . " VALUES $values";

        return DAO::Instance()->Query($query);
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
        $query = "UPDATE " . static::$table . " SET $newValues WHERE $conditions";

        return DAO::Instance()->Query($query);
    }

    public static function Delete($conditions)
    {
        $query = "DELETE FROM " . static::$table . " WHERE $conditions";

        return DAO::Instance()->Query($query);
    }

    public static function Query($query)
    {
        return DAO::Instance()->Query($query);
    }
}