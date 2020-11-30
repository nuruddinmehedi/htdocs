<?php
include("../header.php");


class rozi{
    
    public static $name="rozi";
    public static $nickname="hudoni";
    
    static function detail(){
      echo "name:".self::$name."<br>nickname:".self::$nickname; 
    }
    
}

rozi:: detail();




include("../footer.php");
?>