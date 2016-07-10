<?php

class Database
{
    use Src\Singleton;
    
    private $link;
    
    public function setConnect($dsn, $username, $password)
    {
        $this->link = new \PDO($dsn, $username, $password);
    }
    
    public function getConnection()
    {
        return $this->link;
    }
}