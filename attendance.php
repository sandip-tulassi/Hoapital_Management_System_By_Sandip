<?php

include('config.php');
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
		var date = document.getElementById("date").value;
		$.post("checkemp.php",
		{
			param1:sector,
			param2:date
		},
		function (data,status)
		{
			var namearr = data.split(',');
			var arrlen = namearr.length;
			//alert(arrlen);
			document.getElementById("displayemp").innerHTML ="";
			if(namearr[0]!="")
			{
				
			var tabname = "<table border=\"1\" id='atttab'>";
			tabname+="<tr><td>Select</td><td>Name</td><td>Fullday</td><td>Halfday</td><td>Absent</td></tr>";
			//alert(arrlen);
			for(i in namearr )
			{
				//alert("Okay");
				
				tabname+="<tr><td><input type='checkbox' id='namecheck_"+i+"'  name='namecheck[]' value='"+namearr[i]+"'></td><td>"+namearr[i]+"</td>";
				tabname+="<td><input type='radio' class='attendance_"+i+"' onclick=' return checkcheckbox(this.className)' name=\"attendance_"+i+"\" value='Fullday'></td>";
				tabname+="<td><input type='radio' class='attendance_"+i+"' onclick=' return checkcheckbox(this.className)' name=\"attendance_"+i+"\" value='Halfday'></td>";
				tabname+="<td><input type='radio' class='attendance_"+i+"' onclick=' return checkcheckbox(this.className)' name=\"attendance_"+i+"\" value='Absent'></tr>";
				
			}
			tabname+="</table>";
			document.getElementById("displayemp").innerHTML = tabname;
			}
		}
		);
	}
	
	function checkornot()
	{
		var tablen = $("#atttab tr").length;
		tablen--;
		var i=0;
		var arr =[];
		for(i;i<tablen;i++)
		{
			var empval = document.getElementById("namecheck_"+i).checked;
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
	
	function checkcheckbox(thisclass)
	{
		
		var paramarr = thisclass.split('_');
		var b = paramarr[1];
		var empval = document.getElementById("namecheck_"+b).checked;
		if(!empval)
		{
			alert("Check the Employee name first");
			return false;
		}
		else
		{
			return true;
		}
			
	}
	</script>
</head>

<body>
<?php
include('navmenu.php');
?>

<center>
<h3>Attendance</h3>
<form method="post" action="savedata.php" onsubmit="return checkornot()">
	<table border="1">
		<tr><td colspan="2"><center>Attendance</center></td></tr>
		<tr><td><center>Date</center></td><td><center>Sector</center></td></tr>
		<tr>
		<td>
			<input type="text" name="date" id="date" placeholder = "DD-MM-YYYY">
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