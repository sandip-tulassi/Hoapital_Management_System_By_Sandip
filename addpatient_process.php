<?php
include('config.php');
extract($_POST);
echo "<pre>";
print_r($_POST);
$coutitems = count($name);
for($i=0;$i<$coutitems;$i++)
{
	if($name[$i] != "" && $email[$i] != "" && $contact[$i] != "" && $dob[$i] != "" && $doa[$i] != "" )
	{
		
		$query = "INSERT INTO patient (id, name,email, mob, dob, date_of_admit)";
		$query .=  "VALUES (NULL, '$name[$i]', '$email[$i]', '$contact[$i]', '$dob[$i]','$doa[$i]')";
		//echo $query;

		mysqli_query($con,$query);
	}
}

header('location:addpatient.php')
?>