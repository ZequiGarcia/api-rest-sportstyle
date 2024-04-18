<?php 

class Database{
    private $host = 'sql113.infinityfree.com';
    private $user = 'if0_36381261';
    private $password = 'SportStyle100';
    private $database = 'if0_36381261_sportstyle';

    public function getConnection(){
        $hostDB = "mysql:host=".$this->host.";dbname=".$this->database.";";

        try {
            $connection = new PDO($hostDB, $this->user, $this->password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (PDOException $e) {
            die("ERROR:". $e->getMessage());
        }
    }
}

?>