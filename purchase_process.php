<?php
include('config.php');
extract($_POST);
echo "<pre>";
print_r($_POST);
$coutitems = count($name);
for($i=0;$i<$coutitems;$i++)
{
	if($name[$i] != "" && $dop[$i] != "" && $price[$i] != "" && $customer[$i] != "" )
	{
		
		$query = "INSERT INTO purchase (id, item_id,item_name, date_of_purchase, amountpay, customer)";
		$query .=  "VALUES (NULL, NULL,'$name[$i]', '$dop[$i]', '$price[$i]', '$customer[$i]')";
		echo $query;

		mysqli_query($con,$query);
	}
}

header('location:purchase.php')
?>