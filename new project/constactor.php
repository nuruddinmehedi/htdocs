
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $fname=$_REQUEST['fname'];
    if(empty($fname)){
         echo"pls fill the filled";
        
    }
    else{
        echo $fname;

    }
}
?>

<form method="post" action="">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>



