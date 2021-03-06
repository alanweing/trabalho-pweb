<?php
require_once 'ENV.php';
require_once 'Debug.php';

final class DAO
{
    private static $instance;
    public $connection;

    private function __construct()
    {
        list($host, $user, $password, $database) = ENV::GetMySQLConf();
        $this->connection = mysqli_connect($host, $user, $password, $database);

        if (!$this->connection && ENV::Get('debug'))
            Debug::DD(mysqli_error());
    }

    private function Connect()
    {
        list($host, $user, $password, $database) = ENV::GetMySQLConf();
        $this->connection = mysqli_connect($host, $user, $password, $database);
    }

    public static function Instance()
    {
        if (is_null(self::$instance))
            self::$instance = new self;

        return self::$instance;
    }

    public function Query(string $query)
    {
        if (!$this->connection->ping())
        {
            echo "deu ruim";
            $this->Connect();
        }

        return $this->connection->query($query);
    }

    public function __destruct()
    {
        $this->connection->close();
    }
}