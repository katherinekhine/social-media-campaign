<?php

class Database
{
    private $pdo;
    private $host = 'localhost';
    private $dbname = 'smc';
    private $username = 'root';
    private $password = '';

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function create($sql, $params)
    {
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($params);
    }

    public function read($sql, $params = [])
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function update($sql, $params)
    {
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($params);
    }

    public function delete($sql, $params)
    {
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($params);
    }
}
