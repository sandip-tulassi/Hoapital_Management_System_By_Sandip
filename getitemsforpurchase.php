<?php
include('config.php');

$query = "select * from item";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($result))
{
	$arr[] = $row['name'];
}

$itemname = implode(',',$arr);
echo $itemname;

?>