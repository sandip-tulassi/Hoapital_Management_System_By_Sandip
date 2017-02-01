<?php
include('config.php');
extract($_POST);
echo "<pre>";
print_r($_POST);
$coutitems = count($name);
for($i=0;$i<$coutitems;$i++)
{
	if($name[$i] != "" && $location[$i] != "" && $contact[$i] != "" && $owner[$i] != "" )
	{
		
		$query = "INSERT INTO supplier (id, name, location, contactno, owner)";
		$query .=  "VALUES (NULL, '$name[$i]', '$location[$i]', '$contact[$i]', '$owner[$i]')";
		echo $query;

		mysqli_query($con,$query);
	}
}

header('location:addsupplier.php')
?>