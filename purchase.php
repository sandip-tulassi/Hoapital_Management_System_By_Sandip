<?php
include('config.php');


?>

<html>
<head>
<title>Purchasing Item</title>
<script src="jquery-3.1.1.js"></script>
<script>
	var dindex =  1;

	
	function newpurchaserow(thisid)
	{
		var tab = document.getElementById('purchasetab');
		var tablen = tab.rows.length;
		var index = thisid.split('@');
		var b = parseInt(index[1]);
		var name = document.getElementById("name@"+b).value;
		var dop = document.getElementById("dop@"+b).value;
		var price = document.getElementById("price@"+b).value;
		var customer = document.getElementById("customer@"+b).value;
		
		b+=2;
		if(tablen == b && name != "" && dop!= "" && price != "" && customer != "")
		{
			var tab = document.getElementById('purchasetab');
			var ablen = tab.rows.length;
			var tr = tab.insertRow(tablen);
			
			var td1 = tr.insertCell(0);
			
			
			var input1 = document.createElement('select');
			
			input1.name = "name[]";
			input1.id = "name@"+dindex;
			var defaultop = document.createElement('option');
			defaultop.selected = true;
			defaultop.disabled = true;
			defaultop.text = "--Select Item--";
			input1.appendChild(defaultop);
			
			$.post("getitemsforpurchase.php",
			{
			},
			function(data,status)
			{
				//alert(data);
				var arr = data.split(',');
				for(i in arr)
				{
					var option1 = document.createElement('option');
					option1.value = arr[i];
					option1.text = arr[i];
					input1.appendChild(option1);
				}
			}
			);
			
			
			td1.appendChild(input1);
			
			var td2 = tr.insertCell(1);
			var input2 = document.createElement('input');
			input2.type = "text";
			input2.name = "dop[]";
			input2.id = "dop@"+dindex;
			input2.size = "15";
			td2.appendChild(input2);
			
			var td3 = tr.insertCell(2);
			var input3 = document.createElement('input');
			input3.type = "text";
			input3.name = "price[]";
			input3.id = "price@"+dindex;
			input3.size = "15";
			td3.appendChild(input3);
			
			var td4 = tr.insertCell(3);
			var input4 = document.createElement('input');
			input4.type = "text";
			input4.name = "customer[]";
			input4.id = "customer@"+dindex;
			input4.size = "15";
			input4.onblur = function () { newpurchaserow(this.id)};
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
<h3>Purchasing Item</h3>
<form name="addsupplier" method="post" action="purchase_process.php">
			<table id="purchasetab" border="1">
			<tr>
			<td>Item Name</td>
			<td>Date Of Purchase</td>
			<td>Price</td>
			<td>Customer Name</td>
			
			</tr>
			<tr>
			<td>
				<select name="name[]" id="name@0">
				<option selected="selected" disabled="disabled">--Select Item--</option>
				<?php
					$query = "select * from item";
					$result = mysqli_query($con,$query);
					while($row = mysqli_fetch_assoc($result))
					{
						?>
						<option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
						<?php
					}
				?>
				</select>
			</td>
			<td>
				<input type="text" name="dop[]" id="dop@0" size="15">
			</td>
			<td>
				<input type="text" name="price[]" id="price@0" size="15">
			</td>
			<td>
				<input type="text" name="customer[]" id="customer@0" onblur="newpurchaserow(this.id)" size="15">
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
	