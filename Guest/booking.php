<?php
 	session_start();
 	if (!isset($_SESSION['uname'])) {
 		header("location: login.php");
 	}
?>
<!DOCTYPE html>
 <html>
 <head>
 	<title>Booking</title>
 	</head>
 <body>

  <h1 align="center">For Booking Hotels</h1>
<hr>
<br>
<table border="1" align="center">
<tr>
	<td align="center">Hotel</td>
	<td align="center">Rooms</td>
	<td>Hotel Name</td>
	<td>Confirm</td>


</tr>
<tr>
	<td><img src="Hotel1.png"  height="200px" width="250px"></td>
	<td><img src="room1.png"  height="180px" width="200px"></td>
	<td>Acqualina Resort</td>  
    <td align="center"><a href="payment.php"><input type="button"  name="" value="Confirm"></a></td>



</tr>

<tr>
	<td><img src="Hotel2.png"  height="200px" width="250px"></td>
	<td><img src="room2.png"  height="180px" width="200px"></td>
	<td>Coast Hotels</td>  
    <td align="center"><a href="payment.php"><input type="button"  name="" value="Confirm"></a></td>



</tr>
<tr>
	<td><img src="Hotel3.png"  height="200px" width="250px"></td>
	<td><img src="room3.png"  height="180px" width="200px"></td>
	<td>Astro Resort</td>  
    <td align="center"><a href="payment.php"><input type="button"  name="" value="Confirm"></a></td>



</tr>
	

</table>
<h3 align="center"><a href="Reserve.php"><input type="button" name="back page" value="Back Page"></a></h3>

</body>
</html>
   
    
		


