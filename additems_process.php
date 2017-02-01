<?php
include('config.php');
extract($_POST);
//echo "<pre>";
//print_r($_POST);
$coutitems = count($name);
for($i=0;$i<$coutitems;$i++)
{
	if($name[$i]!="" && $price[$i]!="" && $isbn[$i]!="" && $mfgdate[$i]!="" && $expmonth[$i]!="" && $addingdate[$i]!="")
	{
		
		$query = "INSERT INTO item (id, name, price, isbn, mfgdate, expmonth, date_of_adding)";
		$query .=  "VALUES (NULL, '$name[$i]', '$price[$i]', '$isbn[$i]', '$mfgdate[$i]', '$expmonth[$i]','$addingdate[$i]')";
		//echo $query;

		mysqli_query($con,$query);
	}
}

header('location:additems.php')
?>