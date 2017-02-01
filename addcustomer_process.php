<?php
include('config.php');
extract($_POST);
echo "<pre>";
print_r($_POST);
$coutitems = count($name);
for($i=0;$i<$coutitems;$i++)
{
	$query = "INSERT INTO customer (id, name, date_of_purchase, address, email, dob)";
	$query .=  "VALUES (NULL, '$name[$i]', '$dop[$i]', '$address[$i]', '$email[$i]', '$dob[$i]')";
	echo $query;

	mysqli_query($con,$query);
}

header('location:additems.php')
?>

