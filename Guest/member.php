<?php
 	session_start();
 	if (!isset($_SESSION['uname'])) {
 		header("location: login.php");
 	}
?>
<!DOCTYPE html>
 <html>
 <head>
 	<title>Vip Membership</title>
 	</head>
 <body>
 	<center>
 	<fieldset style="width: 500px">
 <form>



<table border="1" align="center">
	<tr><td align="center" colspan="2"><h1 align="center">Vip Membership</h1></td>	
	<tr>
		<td align="center">Catagory</td>
		<td align="center">Confirm</td>
	</tr>
<tr>
		<td>Platinum</td>
		<td align="center"><input type="radio" name="gender"></td>
	</tr>

<tr>
		<td>Gold</td>
		<td align="center"><input type="radio" name="gender"></td>
	</tr>
	<tr>
		<td>Silver</td>
		<td align="center"><input type="radio" name="gender"></td>
	</tr>
	<tr>
<td align="center" colspan="2"><a href="reserve.php"><input type="button" name="Confirm" value="Proceed"></a></td>
</tr>
</table>


</form>
</fieldset>
</center>
 </body>
 </html>