<?php
include("../header.php");
/*include("autoloadfolder/c.php");
function __autoload($clsass_name){
include "autoloadfolder/".$clsass_name.".php";
}*/
 spl_autoload_register(function($class_name){
include "autoloadfolder/".$class_name.".php";

});
$c= new c;
$java= new java;
$php= new php;
include("../footer.php");
?>