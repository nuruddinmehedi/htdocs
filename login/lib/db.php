<?php


class db{
    private $host="localhost";
    private $dbuser="root";
    private $dbpass="";
    private $dbname="login_test";
    public $pdo;
    public function __construct(){
        if(!isset($this->pdo)){
            
            try{
                $link= new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->dbuser,$this->dbpass);
                $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $link->exec("SET CHARACTER SET utf8");
                $this->pdo=$link;
            } catch(PDOException $e){
                
                die("field to connect....".$e->getMessage());
            }
        }
        
    }
    
}

?>