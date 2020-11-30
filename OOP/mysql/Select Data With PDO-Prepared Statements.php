<?php
include("../header.php");

$dsn="mysql:dbname=test;host=localhost";
$user="root";
$pass="";
$db= new PDO($dsn,$user,$pass);
$id=array(1,2,3);
$que="select * from nur_tab where id=:id";
$result=$db->prepare($que);
$result->bindValue(':id',$id);
$result->execute();
foreach($result as $value){
    
    echo "name:".$value['name']."<br>age:".$value['age']."<br>id:".$value['id']."<br>skill:".$value['skill'];
}


include("../footer.php");
?>