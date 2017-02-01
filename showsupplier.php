<?php
include('config.php');

?>

<html>
<head>
<title>Show All Suppliers</title>
</head>
<body>
<?php
include('navmenu.php');
?>
<center>
<h3>All  Suppliers</h3>
<form name="showitems" method="post" action="showitems_process.php">
			<table id="allopt" border="1">
			<tr>
			<td>Name</td>
			<td>Location</td>
			<td>Contact No.</td>
			<td>Owner</td>
			
			
			</tr>
			<?php
				$query = "select * from supplier";
				$result = mysqli_query($con,$query);
				while($row = mysqli_fetch_assoc($result))
				{
					?>
					<tr>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['location'];?></td>
						<td><?php echo $row['contactno'];?></td>
						<td><?php echo $row['owner'];?></td>
						
					</tr>
					<?php
				}

			?>
			
			
			</table>
			
		</form>
	</center>
</body>
</html>
	