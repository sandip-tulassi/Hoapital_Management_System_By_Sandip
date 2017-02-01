<?php
$con = mysqli_connect("localhost","root","","employee");
extract($_POST);
//$param1 = 'Testing';
//$param2 = '18-01-2017';
$query1 = "SELECT name FROM emp WHERE sector = '$param1'";
//echo $query1;
//echo $query1;
$result1 = mysqli_query($con,$query1);
while($row = mysqli_fetch_assoc($result1))
{
	$emp[] = $row['name'];
}

//echo "<pre>";
//print_r($emp);
$strname = implode(',',$emp);
//echo $strname;
//$str = preg_replace('/(<hr(.*?)>)/i',$before.'$1'.$after,$str);
$strname = str_replace(",","','",$strname);
//echo $strname;
$query2  = "SELECT *  FROM attendence where date = '$param2' and empname  in ('$strname')";
//echo $query2;
$result2 = mysqli_query($con,$query2);
//if($result2)
	//echo "okay";
if(mysqli_num_rows($result2)==0)
{
	$registered = array();
	//echo "okay";
}
while($row = mysqli_fetch_assoc($result2))
{
	$registered[] =   $row['empname'] ;
	
}
//echo "<pre>";
//print_r($registered);
//$strname1 = implode(',',$registered);
$newarr = array_diff($emp,$registered);
//echo "<pre>";
//print_r($newarr);
//echo "OKay";

$str = implode(',',$newarr);
echo $str;
?>