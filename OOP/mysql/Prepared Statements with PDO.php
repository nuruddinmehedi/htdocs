<?php
include("../header.php");
$dsn="mysql:dbname=test;host=localhost;";
$user="root";
$pass="";
  $db= new PDO($dsn,$user,$pass);
$name="hasan";
$age=1;
$id=4444;
$skill="html";

/*
$qur="insert into nur_tab(name,age,id,skill) value(?,?,?,?)";
$smtm=$db->prepare($qur);
$arr=array($name,$age,$id,$skill);
$smtm->execute($arr);
*/

$qur="insert into nur_tab(name,age,id,skill) value(:name,:age,:id,:skill)";
$smtm=$db->prepare($qur);
$smtm->bindParam(':name',$name);
$smtm->bindParam(':age',$age);
$smtm->bindParam(':id',$id);
$smtm->bindValue(':skill',"skill");
$smtm->execute();

include("../footer.php");
?>