<?php
include("main.php");
class student extends main{
    protected $table="student__tab";
    private $name;
    private $dep;
    private $age;
    
    
    public function name($name){
        $this->name=$name;
    }
    public function dep($dep){
        $this->dep=$dep;
    }
    public function age($age){
        $this->age=$age;
    }
   
    public function update($id){
        
        $qur="update $this->table set Name=:Name,Department=:Department,Age=:Age where ID=:ID";
        $stmt= DB::prepare($qur);
        $stmt->bindParam(':Name',$this->name);
        $stmt->bindParam(':Department',$this->dep);
        $stmt->bindParam(':Age',$this->age);
        $stmt->bindParam(':ID',$id);
        return $stmt->execute();
        
    }
    
     public function insert(){
        
        $qu="insert into $this->table(Name,Department,Age) values(:Name,:Department,:Age)";
        $stmt= DB::prepare($qu);
        $stmt->bindParam(':Name',$this->name);
        $stmt->bindParam(':Department',$this->dep);
        $stmt->bindParam(':Age',$this->age);
        return $stmt->execute();
    }
    


}

?>