<?php

class Database
{
    private $pdo;

    public function __construct()
    {


        $host = getenv('DB_HOST');
        $dbname = getenv('DB_NAME');
        $username = getenv('DB_USERNAME');
        $password = getenv('DB_PASSWORD');
        $port = getenv('DB_PORT');

        try {
            $dsn = "mysql:host=$host;dbname=$dbname;port=$port";
            $this->pdo = new PDO($dsn, $username, $password);
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











// class Database
// {
//     private $pdo;
//     private $host = 'localhost';
//     private $dbname = 'smc';
//     private $username = 'root';
//     private $password = '';

//     public function __construct()
//     {
//         try {
//             $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
//             $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         } catch (PDOException $e) {
//             echo "Connection failed: " . $e->getMessage();
//         }
//     }

//     public function create($sql, $params)
//     {
//         $stmt = $this->pdo->prepare($sql);
//         return $stmt->execute($params);
//     }

//     public function read($sql, $params = [])
//     {
//         $stmt = $this->pdo->prepare($sql);
//         $stmt->execute($params);
//         return $stmt->fetchAll(PDO::FETCH_ASSOC);
//     }


//     public function update($sql, $params)
//     {
//         $stmt = $this->pdo->prepare($sql);
//         return $stmt->execute($params);
//     }

//     public function delete($sql, $params)
//     {
//         $stmt = $this->pdo->prepare($sql);
//         return $stmt->execute($params);
//     }
// }
