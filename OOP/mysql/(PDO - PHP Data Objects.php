<?php
include("../header.php");
$dsn="mysql:dbname=test;host=localhost;";
$user="root";
$pass="";
  $db= new PDO($dsn,$user,$pass);
  if ($db==false) {
      echo"filed to connect...";
  } 
else{
          echo" connected...";

}

$qur="select * from nur_tab";
$result= $db->query($qur);
foreach($result as $value){
    echo $value['name']."<br>";
}
include("../footer.php");
?>