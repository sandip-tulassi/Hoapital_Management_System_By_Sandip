<?php
include('config.php');

?>

<html>
<head>
<title>ADD Employee</title>
<style>
#submitdiv
{
	display:none;
}
#addemp
{
	
}
</style>
<script>
var dindex =  1;
	function emptypeselection()
	{
		
		var emptype = document.getElementById("emptype").value;
		if(emptype=="doctor")
		{
		//document.getElementById('addemp').style.display = "block";
		document.getElementById('addemp').innerHTML = "";	
		var str = "<tr>";
		str += "<td>Name</td>";
		str += "<td>Email</td>";
		str += "<td>Mobile</td>";
		str += "<td>Date Of Birth</td>";
		str += "<td>Degree</td>";
		str += "<td>Timming</td>";
		str+="</tr>";
		
			
		str+="<tr>";	
		str += "<td><input type='text' name='name[]' id='name@0' size='15'></td>"; 
		str += "<td><input type='text' name='email[]' id='email@0' size='15'></td>"; 
		str += "<td><input type='text' name='mobile[]' id='mobile@0' size='15'></td>"; 
		str += "<td><input type='text' name='dob[]' id='dob@0' size='15'></td>"; 
		str += "<td><input type='text' name='degree[]' id='degree@0' size='15'></td>"; 
		str += "<td><input type='text' name='timming[]' id='timming@0' size='15' onblur= 'newdoctorrow(this.id)'></td>"; 
		str+="</tr>";
		document.getElementById('addemp').innerHTML = str;
		document.getElementById('submitdiv').style.display = "block";
		
		/* $.post("adddoctor.php",
		{
			param
		},
		function(data,status)
		{
			alert(data);
		}
		); */
		}
		
		if(emptype=="nurse")
		{
			document.getElementById('addemp').innerHTML = "";
			var str = "<tr>";
			str += "<td>Name</td>";
			str += "<td>Email</td>";
			str += "<td>Mobile</td>";
			str += "<td>Date Of Birth</td>";
			str+="</tr>";
			
				
			str+="<tr>";	
			str += "<td><input type='text' name='name[]' id='name@0' size='15'></td>"; 
			str += "<td><input type='text' name='email[]' id='email@0' size='15'></td>"; 
			str += "<td><input type='text' name='mobile[]' id='mobile@0' size='15'></td>"; 
			str += "<td><input type='text' name='dob[]' id='dob@0' size='15'></td>"; 
			str+="</tr>";
			document.getElementById('addemp').innerHTML = str;
			document.getElementById('submitdiv').style.display = "block";			
		}
		
		if(emptype=="stuff")
		{
			document.getElementById('addemp').innerHTML = "";
			var str = "<tr>";
			str += "<td>Name</td>";
			str += "<td>Mobile</td>";
			str += "<td>Date Of Birth</td>";
			str+="</tr>";
			
				
			str+="<tr>";	
			str += "<td><input type='text' name='name[]' id='name@0' size='15'></td>"; 
			str += "<td><input type='text' name='mobile[]' id='mobile@0' size='15'></td>"; 
			str += "<td><input type='text' name='dob[]' id='dob@0' size='15'></td>"; 
			str+="</tr>";
			document.getElementById('addemp').innerHTML = str;
			document.getElementById('submitdiv').style.display = "block";
		}
		
	}
	
	function newdoctorrow(thisid)
	{
		var tab = document.getElementById('addemp');
		var tablen = tab.rows.length;
		var index = thisid.split('@');
		var b = parseInt(index[1]);
		var name = document.getElementById("name@"+b).value;
		var email = document.getElementById("email@"+b).value;
		var mobile = document.getElementById("mobile@"+b).value;
		var dob = document.getElementById("dob@"+b).value;
		var degree = document.getElementById("degree@"+b).value;
		var timming = document.getElementById("timming@"+b).value;
		b+=2;
		if(tablen == b && name != "" && email!= "" && mobile != "" && dob != "" && degree != "" && timming != "")
		{
			var tab = document.getElementById('addemp');
			var ablen = tab.rows.length;
			var tr = tab.insertRow(tablen);
			
			var td1 = tr.insertCell(0);
			var input1 = document.createElement('input');
			input1.type = "text";
			input1.name = "name[]";
			input1.id = "name@"+dindex;
			input1.size = "15";
			td1.appendChild(input1);
			
			var td2 = tr.insertCell(1);
			var input2 = document.createElement('input');
			input2.type = "text";
			input2.name = "email[]";
			input2.id = "email@"+dindex;
			input2.size = "15";
			td2.appendChild(input2);
			
			var td3 = tr.insertCell(2);
			var input3 = document.createElement('input');
			input3.type = "text";
			input3.name = "mobile[]";
			input3.id = "mobile@"+dindex;
			input3.size = "15";
			td3.appendChild(input3);
			
			var td4 = tr.insertCell(3);
			var input4 = document.createElement('input');
			input4.type = "text";
			input4.name = "dob[]";
			input4.id = "dob@"+dindex;
			input4.size = "15";
			td4.appendChild(input4);
			
			var td5 = tr.insertCell(4);
			var input5 = document.createElement('input');
			input5.type = "text";
			input5.name = "degree[]";
			input5.id = "degree@"+dindex;
			input5.size = "15";
			td5.appendChild(input5);
			
			var td6 = tr.insertCell(5);
			var input6 = document.createElement('input');
			input6.type = "text";
			input6.name = "timming[]";
			input6.id = "timming@"+dindex;
			input6.size = "15";
			input6.onblur = function () { newdoctorrow(this.id)};
			td6.appendChild(input6);
			
			dindex++;
				
		}
		
	}
</script>
</head>
<body>
<?php
include('navmenu.php');
?>
<center>
<h3>Adding Employee</h3>
<form name="showitems" method="post" action="addemployee_process.php">
			<table>
			<tr>
			<td>Employee Type</td>
			<td>
				<select name="emptype" id="emptype" onchange="emptypeselection()" >
				<option disabled="disabled" selected="selected">--Select  Type--</option>
				<option value="doctor">Doctor</option>
				<option value="nurse">Nurse</option>
				<option value="stuff">Stuff</option>
				<?php
				
				?>
				</select>
			</td>
			</tr>
			</table>

			<table id="addemp" border="1">
			
			
			<?php
				$query = "select * from supplier";
				$result = mysqli_query($con,$query);
				while($row = mysqli_fetch_assoc($result))
				{
					?>
					
					<?php
				}

			?>
			
			
			</table>
			<div id="submitdiv">
			<table>
			<tr>
			<td><input type="submit" name="submit" value="Save"></td>
			<td><input type="reset" name="reset" value="Reset"></td>
			</tr>
			<div>
			</table>
			
		</form>
	</center>
</body>
</html>
	


