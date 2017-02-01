<?php
include('config.php');
extract($_POST);
echo "<pre>";
print_r($_POST);
if($emptype == 'doctor')
{
$coutitems = count($name);
for($i=0;$i<$coutitems;$i++)
{
	if($name[$i]!="" && $email[$i]!="" && $mobile[$i]!="" && $dob[$i]!="" && $degree[$i]!="" && $timming[$i]!="")
	{
		$query = "INSERT INTO doctor (id, name, email, mob, dob, degree, timming)";
		$query .=  "VALUES (NULL, '$name[$i]', '$email[$i]', '$mobile[$i]', '$dob[$i]', '$degree[$i]','$timming[$i]')";
		echo $query;

		mysqli_query($con,$query);
	}
	
}

}

if($emptype == 'nurse')
{
$coutitems = count($name);
for($i=0;$i<$coutitems;$i++)
{
	$query = "INSERT INTO doctor (id, name, email, mob, dob, degree, timming)";
	$query .=  "VALUES (NULL, '$name[$i]', '$email[$i]', '$mobile[$i]', '$dob[$i]', '$degree[$i]','$timming[$i]')";
	echo $query;

	mysqli_query($con,$query);
}

}


if($emptype == 'stuff')
{
$coutitems = count($name);
for($i=0;$i<$coutitems;$i++)
{
	$query = "INSERT INTO doctor (id, name, email, mob, dob, degree, timming)";
	$query .=  "VALUES (NULL, '$name[$i]', '$email[$i]', '$mobile[$i]', '$dob[$i]', '$degree[$i]','$timming[$i]')";
	echo $query;

	mysqli_query($con,$query);
}

}

header('location:addemployee.php') 
?>

