<?php
include('function.php');

?>
<form action="" method="post" >
    <input type="number" name="number">
    <input type="number" name="number1" >
    <input type="submit" value="submit" name="submit">


</form>




<?php
if(isset($_POST['submit'])){

    $number1=$_POST['number'];
    $number2=$_POST['number1'];
    if(empty($number1) or empty($number2)){
        
        echo "<span style=\"color:red;\">filed must not be empty</span> <br>";
    }
else{
    $myo= new my;
    $myo->add($number1,$number2);
    $myo->sub($number1,$number2);
    $myo->mal($number1,$number2);
    $myo->div($number1,$number2);
    }
}

?>
