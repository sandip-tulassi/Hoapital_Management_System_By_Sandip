<?php
$con = mysqli_connect("localhost","root","","employee");
$query1  = "SELECT distinct sector FROM emp";
$result1 = mysqli_query($con,$query1);
while($row = mysqli_fetch_assoc($result1))
{
	$sector[] =   $row["sector"] ;
}


//echo "<pre>";
//print_r($sector);
//$jsonsector = json_encode($sector);

?>

<!DOCTYPE html>
<html>
<head>
<script src="jquery-3.1.1.js"></script>
	<script>
	
	function checkemp()
	{
		var sector = document.getElementById("sector").value;
		var salyear = document.getElementById("year").value;
		var salmonth = document.getElementById("month").value;
		//var date = document.getElementById("date").value;
		$.post("salarycalculation.php",
		{
			param1:sector,
			param2:salmonth,
			param3:salyear
		},
		function (data,status)
		{
			//alert(data);
			document.getElementById("displayemp").innerHTML = data;
		}
		);
	}
	
	function dateset()
	{
		var cdate = new Date();
		var curdate = cdate.getDate();
		//alert(curdate);
		var curmonth =  cdate.getMonth();
		curmonth++;
		if(curmonth>=1&&curmonth<=9)
		{
			curmonth = '0'+curmonth;
		}
		var curyear = cdate.getFullYear();
		var today =curdate+'-'+curmonth+'-'+curyear;
		document.getElementById("date").value = today;
	}
	function checkmonthyear()
	{
		var salyear = document.getElementById("year").value;
		var salmonth = document.getElementById("month").value;
		var curdate = document.getElementById("date").value;
		var datearr = curdate.split('-');
		if(salyear==datearr[2])
		{
			
			if(salmonth>datearr[1])
			{
				alert("Salary generation month must be lesser than current month");
			}
			else if(salmonth == datearr[1])
			{
				alert("Salary generatin month year and current month year can't be same");
			}
		}
		else if(salyear>datearr[2])
		{
			alert("Salary-Year filled must  be lesser than or equal to current year");
		}
	}
	function checkornot()
	{
		var tablen = $("#saltab tr").length;
		tablen--;
		var i=0;
		var arr =[];
		for(i;i<tablen;i++)
		{
			var empval = document.getElementById("empname_"+i).checked;
			if(empval)
			{
			arr.push(empval); 
			}
			
		}
		
		if(arr.length == 0)
		{
			alert("Check atleast one employee to procede");
			return false;
		}
		return true;
		
	}
	
	</script>
</head>

<body>
	<center>
	<form method="post" action="savesalary.php" onsubmit=" return checkornot()">
		<table border="1">
			<tr><td colspan="4"><center>Salary Generation</center></td></tr>
			<tr>
			
			<td><center>Date</center></td>
			<td><center>Month</center></td>
			<td><center>Year</center></td>
			<td><center>Sector</center></td>
			
			</tr>
			<tr>
			
			
			<td>
				<input type="text" name="date" id="date" placeholder = "DD-MM-YYYY" onfocus="dateset()">
			</td>
			<td>
				<select name="month" id="month" onchange="checkmonthyear()">
				<option selected="selected" disabled="disabled">Select Month</option>
				<option value="01">January</option>
				<option value="02">February</option>
				<option value="03">March</option>
				<option value="04">April</option>
				<option value="05">May</option>
				<option value="06">June</option>
				<option value="07">July</option>
				<option value="08">August</option>
				<option value="09">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>
				</select>
			</td>
			<td>
				<input type="text" name="year" id="year" placeholder = "YYYY" onblur="checkmonthyear()">
			</td>
			<td>
				<select name="sector" id="sector" onchange="checkemp()">
					<option disabled="disabled" selected = "selected">Select Any Sector</option>
					<?php
					foreach($sector as $value)
					{
						?>
						<option value="<?php echo $value ;?>"><?php echo $value ;?></option>
						<?php
					}
					?>
				</select>
			</td>
			
			
			</tr>
		</table>
		<center>
		<br>
		<div id="displayemp">
		
		</div>
		<br>
		<input type="submit" name="save" value="Save">
		<input type="button" name="cancel" value="Cancel">
			
		</center>
	</form>
	</center>
	
</body>

</html>