<?php
include('config.php');


?>

<html>
<head>
<title>Add Items</title>
</head>
<body>
<?php
include('navmenu.php');
?>
<center>
<h3>ADD Customer</h3>
<form name="addcustomer" method="post" action="addcustomer_process.php">
			<table id="allopt" border="1">
			<tr>
			<td>Name</td>
			<td>Address</td>
			<td>Email</td>
			<td>DOB</td>
			<td>Purchasing Date</td>
			</tr>
			<tr>
			<td>
				<input type="text" name="name[]" id="name_0">
			</td>
			<td>
				<input type="text" name="address[]" id="address_0">
			</td>
			<td>
				<input type="text" name="email[]" id="email_0" >
			</td>
			<td>
				<input type="text" name="dob[]" id="dob_0" class="datetimepicker">
			</td>
			<td>
				<input type="text" name="dop[]" id="dop_0" >
			</td>
			
			</table>
			<center>
			<input type="submit" name="save" value="Save">
			<input type="button" name="cancel" value="Cancel">
			</center>
		</form>
	</center>
</body>
</html>
	