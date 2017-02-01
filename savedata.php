<?php
$con = mysqli_connect("localhost","root","","employee");
extract($_POST);
//echo "<pre>";
//print_r($_POST);
$namecount = count($namecheck);
for($i=0;$i<$namecount;$i++)
{
	
	
	$name = $namecheck[$i];
	$attendence ="attendence".'_'.$i;
	if(isset($_POST[$attendence]))
	{
		$abs = $_POST[$attendence];
		
	}
	
	//echo $name."-".$attendence; 
	$query = "INSERT INTO attendence(empname,status,date,sector) values('$name','$abs','$date','$sector')";
	
	//echo $query;
	$result = mysqli_query($con,$query);
	//echo $_POST['attendence'][$i];
}

header('location:attendence.php');

?>