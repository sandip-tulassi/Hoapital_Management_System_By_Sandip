<?php
$con = mysqli_connect("localhost","root","","employee");
extract($_POST);
//echo "<pre>";
//print_r($_POST);
$month_year = $month.'-'.$year;
$status ="paid";
$empno = count($empname);
for($i=0;$i<$empno;$i++)
{
	$query = "INSERT INTO salarydetails(paid_on, salary_month_year, sector, empname, totalday, salary, estsalaray, pfcal, esical, totalsalary, status)VALUES ('$date', '$month_year', '$sector', '$empname[$i]', '$totalday[$i]', '$salary[$i]', '$estsalaray[$i]', '$pfcal[$i]', '$esical[$i]', '$totalsalary[$i]', '$status');";
	$result = mysqli_query($con,$query);
 
 //$query = "Hello";
 //echo $query;
 }
header('location:salarygeneration.php');



?>