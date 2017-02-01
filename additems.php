<?php
include('config.php');


?>

<html>
<head>
<title>Add Items</title>
<script>
	var dindex =  1;

	
	function newitemrow(thisid)
	{
		var tab = document.getElementById('additemstab');
		var tablen = tab.rows.length;
		var index = thisid.split('@');
		var b = parseInt(index[1]);
		var name = document.getElementById("name@"+b).value;
		var price = document.getElementById("price@"+b).value;
		var isbn = document.getElementById("isbn@"+b).value;
		var mfgdate = document.getElementById("mfgdate@"+b).value;
		var expmonth = document.getElementById("expmonth@"+b).value;
		var addingdate = document.getElementById("addingdate@"+b).value;
		b+=2;
		if(tablen == b && name != "" && price!= "" && isbn != "" && mfgdate != "" && expmonth != "" && addingdate != "")
		{
			var tab = document.getElementById('additemstab');
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
			input2.name = "price[]";
			input2.id = "price@"+dindex;
			input2.size = "10";
			td2.appendChild(input2);
			
			var td3 = tr.insertCell(2);
			var input3 = document.createElement('input');
			input3.type = "text";
			input3.name = "isbn[]";
			input3.id = "isbn@"+dindex;
			input3.size = "10";
			td3.appendChild(input3);
			
			var td4 = tr.insertCell(3);
			var input4 = document.createElement('input');
			input4.type = "text";
			input4.name = "mfgdate[]";
			input4.id = "mfgdate@"+dindex;
			input4.size = "10";
			td4.appendChild(input4);
			
			var td5 = tr.insertCell(4);
			var input5 = document.createElement('input');
			input5.type = "text";
			input5.name = "expmonth[]";
			input5.id = "expmonth@"+dindex;
			input5.size = "10";
			td5.appendChild(input5);
			
			var td6 = tr.insertCell(5);
			var input6 = document.createElement('input');
			input6.type = "text";
			input6.name = "addingdate[]";
			input6.id = "addingdate@"+dindex;
			input6.size = "10";
			input6.onblur = function () { newitemrow(this.id)};
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
<h3>ADD Items</h3>
<form name="additems" method="post" action="additems_process.php">
			<table id="additemstab" border="1">
			<tr>
			<td>Name</td>
			<td>Price</td>
			<td>ISBN</td>
			<td>Mfg Date</td>
			<td>Exp Month</td>
			<td>Date of Adding</td>
			</tr>
			<tr>
			<td>
				<input type="text" name="name[]" id="name@0" size="15">
			</td>
			<td>
				<input type="text" name="price[]" id="price@0" size="10">
			</td>
			<td>
				<input type="text" name="isbn[]" id="isbn@0"  size="10">
			</td>
			<td>
				<input type="text" name="mfgdate[]" id="mfgdate@0" class="datetimepicker" size="10">
			</td>
			<td>
				<input type="text" name="expmonth[]" id="expmonth@0" size="10">
			</td>
			<td>
				<input type="text" name="addingdate[]" id="addingdate@0" size="10" onblur="newitemrow(this.id)">
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
	