<?php 

class Database
{
    private $hostname = "localhost";
    private $db_name = "restra";
    private $u_name = "root";
    private $pass = "root";
    public $conn;

    public function getConnection()
    {
        try {
            $this->conn = new PDO("mysql:host={$this->hostname};dbname={$this->db_name}", $this->u_name, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            return "Connection error: " . $exception->getMessage();
        }
    }
}


?>