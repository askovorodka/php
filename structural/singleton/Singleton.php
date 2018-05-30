<?php

namespace structural\singleton;

class Singleton implements DataBaseIface
{
    protected static $instance;

    final private function __construct()
    {
    }

    final private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    final private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    public static function getInstance() {
        if (is_null(static::$instance)) {
            static::$instance = new self();
        }

        return static::$instance;
    }

    public function connect()
    {
        try {
            $pwd = getenv('MYSQL_PASSWORD');
            $db = getenv('MYSQL_DATABASE');
            $user = getenv('MYSQL_USER');

            $dsn = "mysql:host=mysql;dbname=$db;charset=utf8";
            $dbh = new \PDO($dsn, $user,$pwd, ['PDO::ATTR_PERSISTENT' => true]);
            echo "Connection success to database";
        } catch (\Exception $exception) {
            die($exception->getMessage());
        }

    }
}