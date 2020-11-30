<?php
include("../header.php");


 abstract class rozi{
    
    public static $name="rozi";
    public static $nickname="hudoni";
    
    static function detail(){
      echo "name:".self::$name."<br>nickname:".self::$nickname; 
    }
   abstract public function your();
    
}

class abastractclass extends rozi{
    
    function my (){
        
        return parent::detail();
    }
      public function your(){
          echo "your name ????";
      }
}
$class= new abastractclass;
$class-> my ();
$class->your();


include("../footer.php");
?>