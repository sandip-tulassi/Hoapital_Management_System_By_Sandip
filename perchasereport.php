<?php
include('config.php');

?>

<html>
<head>
<title>Perchase Report</title>
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
<h3>All  Purchased Items</h3>
<form name="showitems" method="post" action="showitems_process.php">
			<table id="allopt" border="1">
			<tr>
			<td>Items Name</td>
			<td>Amout Pay</td>
			<td>Date Of Purchase</td>
			<td>Customer Name</td>
			
			
			</tr>
			<?php
				$query = "select * from purchase";
				$result = mysqli_query($con,$query);
				while($row = mysqli_fetch_assoc($result))
				{
					?>
					<tr>
						<td class="items"><?php echo $row['item_name'];?></td>
						<td class="items"><?php echo $row['amountpay'];?></td>
						<td class="items"><?php echo $row['date_of_purchase'];?></td>
						<td class="items"><?php echo $row['customer'];?></td>
						
					</tr>
					<?php
				}

			?>
			
			
			</table>
			
		</form>
	</center>
</body>
</html>
	