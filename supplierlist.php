<?php
include('config.php');

?>

<html>
<head>
<title>Supplier List</title>
<style>
.items{
	text-align:center;
}

</style>
</head>
<body>
<?php
include('navmenu.php');
?>
<center>
<h3>All Supplier </h3>
<form name="" method="post" action="">
			<table id="allopt" border="1" cellpadding="8px">
			<tr>
			<td>Supplier Name</td>
			<td>Location</td>
			<td>Contact No</td>
			<td>Owner</td>
			
			
			</tr>
			<?php
				$query = "select * from supplier";
				$result = mysqli_query($con,$query);
				while($row = mysqli_fetch_assoc($result))
				{
					?>
					<tr>
						<td class="items"><?php echo $row['name'];?></td>
						<td class="items"><?php echo $row['location'];?></td>
						<td class="items"><?php echo $row['contactno'];?></td>
						<td class="items"><?php echo $row['owner'];?></td>
						
					</tr>
					<?php
				}

			?>
			
			
			</table>
			
		</form>
	</center>
</body>
</html>
	