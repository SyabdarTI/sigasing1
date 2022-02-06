<?php

class Database
{
    private $host, $db_name,$username, $password;
    public $conn;

    function _construct()
    {
        $this->host      = 'localhost';
        $this->username  = 'root';
        $this->password  = '';
        $this->db_name   = 'penggajian_7r';
    }
    public function getConnecton()
    {
        $this->conn = null;
        try{
            $this->conn = new PDO(
                "mysql:host=" .$this->host.
                ";dbname=".$this>db_name,
                $this->username,
                $this->password
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::RRMODE_EXception);
        }catch(PDOException $e){
            echo "Koneksi Error :" .$e->getMessage();
        }
        return $this->conn;
    }
}