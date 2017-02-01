<?php
include('config.php');


?>

<html>
<head>
<title>Add Suppliers</title>

<script>
	var dindex =  1;

	
	function newsupplierrow(thisid)
	{
		var tab = document.getElementById('addsuppliertab');
		var tablen = tab.rows.length;
		var index = thisid.split('@');
		var b = parseInt(index[1]);
		var name = document.getElementById("name@"+b).value;
		var location = document.getElementById("location@"+b).value;
		var contact = document.getElementById("contact@"+b).value;
		var owner = document.getElementById("owner@"+b).value;
		
		b+=2;
		if(tablen == b && name != "" && location!= "" && contact != "" && owner != "")
		{
			var tab = document.getElementById('addsuppliertab');
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
			input2.name = "location[]";
			input2.id = "location@"+dindex;
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
			input4.name = "owner[]";
			input4.id = "owner@"+dindex;
			input4.size = "15";
			input4.onblur = function () { newsupplierrow(this.id)};
			td4.appendChild(input4);
			
			
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
<h3>ADD Supplier</h3>
<form name="addsupplier" method="post" action="addsupplier_process.php">
			<table id="addsuppliertab" border="1">
			<tr>
			<td>Name</td>
			<td>Location</td>
			<td>Contact No.</td>
			<td>Owner</td>
			
			</tr>
			<tr>
			<td>
				<input type="text" name="name[]" id="name@0" size="15">
			</td>
			<td>
				<input type="text" name="location[]" id="location@0" size="15">
			</td>
			<td>
				<input type="text" name="contact[]" id="contact@0" size="15">
			</td>
			<td>
				<input type="text" name="owner[]" id="owner@0" onblur="newsupplierrow(this.id)" size="15">
			</td>
			
			
			</table>
			<center>
			<input type="submit" name="save" value="Save">
			<input type="button" name="cancel" value="Cancel">
			</center>
		</form>
	</center>
</body>
</html>
	