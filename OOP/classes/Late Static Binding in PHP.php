<?php
include("../header.php");
class php {
     
    public static function phpff(){
        echo static::phpf();
    }
    public static function phpf(){
        return __CLASS__."<br>";
    }
}
class extend extends php{
    
     public static function phpf() {
       return __CLASS__;
}
}
$class=new php;
$class->phpff();
$sclass= new extend;
$sclass->phpff();
include("../footer.php");
?>