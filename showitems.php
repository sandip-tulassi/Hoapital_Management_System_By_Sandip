<?php
include('config.php');

?>

<html>
<head>
<title>Show Items</title>
</head>
<body>
<?php
include('navmenu.php');
?>
<center>
<h3>All  Items</h3>
<form name="showitems" method="post" action="showitems_process.php">
			<table id="allopt" border="1">
			<tr>
			<td>Name</td>
			<td>Price</td>
			<td>ISBN</td>
			<td>Mfg Date</td>
			<td>Expiry Month</td>
			
			</tr>
			<?php
				$query = "select * from item";
				$result = mysqli_query($con,$query);
				while($row = mysqli_fetch_assoc($result))
				{
					?>
					<tr>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['price'];?></td>
						<td><?php echo $row['isbn'];?></td>
						<td><?php echo $row['mfgdate'];?></td>
						<td><?php echo $row['expmonth'];?></td>
					</tr>
					<?php
				}

			?>
			
			
			</table>
			
		</form>
	</center>
</body>
</html>
	