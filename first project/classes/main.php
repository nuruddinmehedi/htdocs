<?php
include("DB.php");
abstract class main{
    
    protected $table;
    
    
    public abstract function update($id);
     public abstract function insert();
    
        public function delate($id){
        
        $que="delete from $this->table where ID=:Id";
            $stmt= DB::prepare($que);
        $stmt->bindParam(':Id',$id);
        return $stmt->execute();
        
    }
    
   
  public function readAll(){
      
      $que="select * from $this->table";
    $stmt= DB::prepare($que);
    $stmt->execute();
    return $stmt->fetchAll();    
  }

    
    
     public function readById($id){
        $qur="select * from $this->table where id=:id";
        $stmt= DB::prepare($qur);
         $stmt->bindParam(':id',$id);
        $stmt->execute();
          return $stmt->fetch(); 
    }
    
    
}



?>