<?php
include('config.php');


?>

<html>
<head>
<title>Add Patient</title>

<script>
	var dindex =  1;

	
	function newpatientrow(thisid)
	{
		var tab = document.getElementById('addpatienttab');
		var tablen = tab.rows.length;
		var index = thisid.split('@');
		var b = parseInt(index[1]);
		var name = document.getElementById("name@"+b).value;
		var email = document.getElementById("email@"+b).value;
		var contact = document.getElementById("contact@"+b).value;
		var dob = document.getElementById("dob@"+b).value;
		var doa = document.getElementById("doa@"+b).value;
		
		
		b+=2;
		if(tablen == b && name != "" && email!= "" && contact != "" && dob != "" && doa != "")
		{
			var tab = document.getElementById('addpatienttab');
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
			input3.name = "contact[]";
			input3.id = "contact@"+dindex;
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
			input5.name = "doa[]";
			input5.id = "doa@"+dindex;
			input5.size = "15";
			input5.onblur = function () { newpatientrow(this.id)};
			td5.appendChild(input5);
			
			
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
<h3>ADD New Patient</h3>
<form name="addpatient" method="post" action="addpatient_process.php">
			<table id="addpatienttab" border="1">
			<tr>
			<td>Name</td>
			<td>Email</td>
			<td>Contact No.</td>
			<td>Date Of Birth</td>
			<td>Date Of Admit</td>
			
			
			</tr>
			<tr>
			<td>
				<input type="text" name="name[]" id="name@0" size="15">
			</td>
			<td>
				<input type="text" name="email[]" id="email@0" size="15">
			</td>
			<td>
				<input type="text" name="contact[]" id="contact@0" size="15">
			</td>
			<td>
				<input type="text" name="dob[]" id="dob@0" size="15">
			</td>
			<td>
				<input type="text" name="doa[]" id="doa@0" onblur="newpatientrow(this.id)" size="15">
			</td>
			
			
			</table>
			<center>
			<br>
			<input type="submit" name="save" value="Save">
			<input type="reset" name="cancel" value="Cancel">
			</center>
		</form>
	</center>
</body>
</html>
	