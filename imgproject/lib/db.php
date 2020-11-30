<?php
include'config.php';
class db{
   private $dbhost= DB_HOST;
   private $dbuser= DB_USER;
   private $dbpass= DB_PASS;
   private $dbname= DB_NAME;
    
    public $link="";
    public $error="";
    
    function __construct(){
        $this->connection();
        
    }
    private function connection(){
        
        $this->link= new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
        if(! $this->link){
            $this->error='failed to connect to db'.$this->link->connect_error;
        }
    }
    
    
    public function insert($query){
      $insert_row=$this->link->query($query) or die($this->link->connect_error.__LINE__ ); 
        if($insert_row){
            return $insert_row;
        }
        else{
            return false;
        }
    }
}

?>