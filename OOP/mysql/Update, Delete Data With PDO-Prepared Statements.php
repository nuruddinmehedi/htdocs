<?php
include("../header.php");
$dsn="mysql:dbname=test;host=localhost;";
$user="root";
$pass="";
$db= new PDO($dsn,$user,$pass);
$id=1;
//$skill="java,php";
//$name= "gaji";


$query="delete from nur_tab where age=?";
$result=$db->prepare($query);
$result->execute(array($id));

/*
$result->bindParam(':id',$id);
$result->bindParam(1,$skill);
$result->bindParam(1,$name);
$result->execute();
*/
//$result->execute(array($skill,$name,$id));

include("../footer.php");


?>