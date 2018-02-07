<?php

class DBManager
{
    private $pdo;

    private function __construct()
    {
        $dsn = 'mysql:dbname=babyblog;host=127.0.0.1';
        $user = 'babyblog';
        $password = 'toto42';
        $pdo = new PDO($dsn, $user, $password);
        $this->setPdo($pdo);
    }
    
    private static $instance = NULL;
    
    public static function getInstance()
    {
        if (!self::$instance)
        {
            self::$instance = new DBManager();
        }
        return self::$instance;
    }
    
    public function getPdo()
    {
        return $this->pdo;
    }
    
    private function setPdo($pdo)
    {
        $this->pdo = $pdo;
    }
}
