
<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<title>Example Title</title>
	<meta name="author" content="Your Name">
	<meta name="description" content="Example description">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="">
	<link rel="icon" type="image/x-icon" href=""/>
</head>

<body>
<form action="processorder.php" method="post">
 <table style="border: 0px;">
 <tr style="background: #cccccc;">
<td style="width: 150px; text-align: center;">Item</td>
<td style="width: 15px; text-align: center;">Quantity</td>
 </tr>
 <tr>
<td>Tires</td>
<td><input type="text" name="tireqty" size="3"
 maxlength="3" /></td>
 </tr>
 <tr>
 <td>Oil</td>
 <td><input type="text" name="oilqty" size="3"
maxlength="3" /></td>
 </tr>
 <tr>
 <td>Spark Plugs</td>
 <td><input type="text" name="sparkqty" size="3"
maxlength="3" /></td>
 </tr>
  <tr>
  <td>address</td>
 <td><input type="text" name="address" width="200px"></td>
</tr>
 <tr><td colspan="2" style="text-align: center;"><input type="submit" value="Submit
Order" /></td>
 </tr>
 <tr>
 <td>How did you find Bob's?</td>

 </table>
 </form>

</body>

</html>