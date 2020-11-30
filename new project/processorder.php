<!--<!DOCTYPE html>
<html>
    <head>
        <title>Bob's Auto Parts - Order Results</title>
    </head>
    <body>
        <h1>Bob's Auto Parts</h1>
        <h2>Order Results</h2>
        <?php /*
        // create short variable names
        $tireqty = $_POST['tireqty'];
        $oilqty = $_POST['oilqty'];
        $sparkqty = $_POST['sparkqty'];
        $option = $_POST['address'];

           // echo "<h1>this is tire $tireqty</h1>";
           // echo  "<h1>this is tire $oilqty</h1>";
           // echo "<h1>this is tire $sparkqty</h1>";
       // echo "<h1>this is tire  $option</h1>";
        $document_root= $_SERVER['DOCUMENT_ROOT'];
        @$fp = fopen("$document_root/new project/orders.txt", 'wb');
if (!$fp){
 echo "<p><strong> Your order could not be processed at this time. " ."Please try again later.</strong></p>";
 exit;
}
     /*   $totalqty = 0;
$totalqty = $tireqty + $oilqty + $sparkqty;
echo "<p>Items ordered: ".$totalqty."<br />";
$totalamount = 0.00;
define('TIREPRICE', 100);
define('OILPRICE', 10);
define('SPARKPRICE', 4);
$totalamount = $tireqty * TIREPRICE
+ $oilqty * OILPRICE
+ $sparkqty * SPARKPRICE;
echo "Subtotal: $".number_format($totalamount,2)."<br />";
$taxrate = 0.10; // local sales tax is 10%
$totalamount = $totalamount * (1 + $taxrate);
echo "Total including tax: $".number_format($totalamount,2)."</p>";
        */?>
    </body>
</html>
-->
<?php
 // create short variable names
 $tireqty = (int) $_POST['tireqty'];
 $oilqty = (int) $_POST['oilqty'];
 $sparkqty = (int) $_POST['sparkqty'];
 $address = preg_replace('/\t|\R/',' ',$_POST['address']);
 $document_root = $_SERVER['DOCUMENT_ROOT'];
 $date = date('H:i, jS F Y');
?>
<!DOCTYPE html>
<html>
 <head>
 <title>Bob's Auto Parts - Order Results</title>
 </head>
 <body>
 <h1>Bob's Auto Parts</h1>
 <h2>Order Results</h2>
 <?php
echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";
echo "<p>Your order is as follows: </p>";
$totalqty = 0;
$totalamount = 0.00;
define('TIREPRICE', 100);
     define('OILPRICE', 10);
define('SPARKPRICE', 4);
$totalqty = $tireqty + $oilqty + $sparkqty;
echo "<p>Items ordered: ".$totalqty."<br />";
if ($totalqty == 0) {
echo "You did not order anything on the previous page!<br />";
} else {
if ($tireqty > 0) {
echo htmlspecialchars($tireqty).' tires<br />';
}
if ($oilqty > 0) {
echo htmlspecialchars($oilqty).' bottles of oil<br />';
}
if ($sparkqty > 0) {
echo htmlspecialchars($sparkqty).' spark plugs<br />';
}
}
$totalamount = $tireqty * TIREPRICE
+ $oilqty * OILPRICE
+ $sparkqty * SPARKPRICE;
echo "Subtotal: $".number_format($totalamount,2)."<br />";
$taxrate = 0.10; // local sales tax is 10%
$totalamount = $totalamount * (1 + $taxrate);
echo "Total including tax: $".number_format($totalamount,2)."</p>";
echo "<p>Address to ship to is ".htmlspecialchars($address)."</p>";
     $c= rand(12012093,12012345671);
$outputstring = "<table style=\"border: 0px;\">


 <tr style=\"background: #cccccc;\">
<th style=\"width: 150px; text-align: center;\">Item</th>
<th style=\"width: 15px; text-align: center;\">Quantity</th>
<th style=\"width: 15px; text-align: center;\">Quantity</th>
 </tr>
 <tr>
<td>Tires</td>
<td>".$tireqty."</td>
 </tr>
 <tr>
 <td>oil</td>
 <td>".$oilqty."</td>
 </tr>
 <tr>
 <td>Spark Plugs</td>
 <td>".$sparkqty."</td>
 </tr>
  <tr>
  <td>address</td>
 <td>".$address."</td>
</tr>
</table>";
// open file for appending
@$fp = fopen("$document_root/new project/orders.txt", 'ab');
if (!$fp) {
echo "<p><strong> Your order could not be processed at this time.
Please try again later.</strong></p>";
exit;
}
flock($fp, LOCK_EX);
     fwrite($fp, $outputstring, strlen($outputstring));
flock($fp, LOCK_UN);
fclose($fp);
echo "<p>Order written.</p>";
 ?>
 </body>
</html>