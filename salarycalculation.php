<?php
$con = mysqli_connect("localhost","root","","employee");
extract($_POST);
//echo "<pre>";
//print_r($_POST);
//$param1 = 'Testing';
//$param2 = '12';
//$param3 = '2016';
$query1 = "SELECT * FROM emp WHERE sector = '$param1'";
//echo $query1;
$result1 = mysqli_query($con,$query1);
//if($result1)
	//echo"okay";
//$salary = array();
$empcount = 0;
//$arrdays[1]=31;
$arrdays = array(31,28,31,30,31,30,31,31,30,31,30,31);
$leapyear = intval($param3);
if($leapyear % 4 == 0)
{
	$arrdays[1]=29;
}
//print_r($arrdays);
while($row = mysqli_fetch_assoc($result1))
{
	$emp[] = $row['name'];
	$salary[] = $row['salary'];
	$pf[] = $row['pf'];
	$esi[] = $row['esi'];
	$empcount++;
}
//echo $empcount;
//print_r($emp);
//print_r($salary);
//print_r($pf);
//print_r($esi);
//echo "<pre>";
//print_r($emp);
//$strname = implode(',',$emp);
//echo $strname;
//$str = preg_replace('/(<hr(.*?)>)/i',$before.'$1'.$after,$str);
//$strname = str_replace(",","','",$strname);
//echo $strname;
//// fullday and halfday calculation////
$empno = count($emp);
for($i=0;$i<$empno;$i++)
{
	$query2  = "SELECT count(*) as fullday FROM attendence where date like '%$param2-$param3%' and empname  = '$emp[$i]' and status = 'Fullday'";
	//echo $query2;
	$result2 = mysqli_query($con,$query2);
	
	while($row = mysqli_fetch_array($result2))
	{
		$fullday[] =  $row['fullday'];
	}
	
	$query3  = "SELECT count(*) as halfday FROM attendence where date like '%$param2-$param3%' and empname  = '$emp[$i]' and status = 'Halfday'";
	//echo $query3;
	$result3 = mysqli_query($con,$query3);
	
	while($row = mysqli_fetch_array($result3))
	{
		$halfday[] =  $row['halfday'];
	}
	
}
//print_r($fullday);
//print_r($halfday);
for($i=0;$i<count($halfday);$i++)
{
$halfday_tofullday[] = $halfday[$i]/2;	
}
//print_r($halfday_tofullday);
for($i=0;$i<count($fullday);$i++)
{
	$totalday[] = $fullday[$i]+$halfday_tofullday[$i];
}
for($i=0;$i<$empcount;$i++)
{
	$monthcal = intval($param2)-1;
	$days = $arrdays[$monthcal];
	$perdaysal[] = $salary[$i]/$days;
	
	
} 
//print_r($perdaysal);
for($i=0;$i<$empcount;$i++)
{
	$estsalaray[] = intval($perdaysal[$i]*$totalday[$i]);
}
//print_r($estsalaray);
//pf calculation
for($i=0;$i<$empcount;$i++)
{
	$pfcal[] = intval($estsalaray[$i] * ($pf[$i]/100));
	
}
//print_r($pfcal);

//esi calculation
for($i=0;$i<$empcount;$i++)
{
	$esical[] = intval($estsalaray[$i] * ($esi[$i]/100));
	
}
//print_r($esical);
//total salary 

for($i=0;$i<$empcount;$i++)
{
	$totalsalary[] = intval($estsalaray[$i] - $pfcal[$i] + $esical[$i]);
	
}
//print_r($totalsalary);
echo "<table border='1' id='saltab'>";
echo "<tr><td>Select</td><td>Name</td><td>Working Days</td><td>Salary</td><td>Gross Salary</td><td>PF</td><td>ESI</td><td>Total Salary</td></tr>";
for($i=0;$i<$empcount;$i++)
{
	echo "<tr>";
	echo "<td><input type='checkbox' id='empname_".$i."'name='empname[]' value='".$emp[$i]."'></td>";
	echo "<td>".$emp[$i]."</td>";
	echo "<td><input type='hidden' name='totalday[]' value='".$totalday[$i]."'>".$totalday[$i]."days</td>";
	echo "<td style='text-align: right;'><input type='hidden' name='salary[]' value='".$salary[$i]."'>".$salary[$i]."</td>";
	echo "<td style='text-align: right;'><input type='hidden' name='estsalaray[]' value='".$estsalaray[$i]."'>".$estsalaray[$i]."</td>";
	echo "<td style='text-align: right;'><input type='hidden' name='pfcal[]' value='".$pfcal[$i]."'>".$pfcal[$i]."</td>";
	echo "<td style='text-align: right;'><input type='hidden' name='esical[]' value='".$esical[$i]."'>".$esical[$i]."</td>";
	echo "<td style='text-align: right;'><input type='hidden' name='totalsalary[]' value='".$totalsalary[$i]."'>".$totalsalary[$i]."</td>";
	echo "</tr>";
}
echo "</table>";
?>