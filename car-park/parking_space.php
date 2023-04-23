<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Car Park Management System</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('inc/head.php');
	?>
	<link href="Source/datepicker_bootstrap/datepicker_bootstrap.css" rel="stylesheet">
	<script>

	window.addEvent('domready', function(){
		new Picker.Date($$('----'), {
			timePicker: true,
			positionOffset: {x: 5, y: 0},
			pickerClass: 'datepicker_bootstrap',
			useFadeInOut: !Browser.ie
		});
	});

	</script>
</head>
<body style="background-color:#1C5A7B;">
	<section id="container">
	<?php
			include('inc/header.php');
						
	?>
	
	<section id="content">
	<img src="src/bg1.png" style="position:absolute; z-index:-1; margin:0;"/>
	<form class="box login" action="process-book-2.php" method="post">
	<fieldset class="boxBody">
	<label><strong>Parking Details</strong></label>
	<hr />
	   <label><strong>Recommended Region For You: </strong><br> As per your vehicles body size</label>
	   <select name="street" class="cjComboBox" >
			<option value="Lane 1">Lane 1 - Light Vehicles Only</option>
			<option value="Lane 2">Lane 2 - Cars,Vans,Buses & Lorries</option>
			
		</select>
		
		<select name="plot" class="cjComboBox" >
			<option value="1">P001</option>
			<option value="2">P002</option>
			<option value="3">P003</option>
			<option value="4">P004</option>

		</select>
		
	<label>Plate Number</label>
	  <input type="text" tabindex="3" name="plateno" placeholder="eg. CAC-2724" required>
	  
	<label><strong>Payment Information</strong></label>
	<hr />
	<!--<label>Enter M-pesa Confirmation Number:</label>
	<input type="text" name="account" placeholder="Card Number" required title="Credit card number" maxlength="14"/> 
-->
	   <label><b>Note: </b><br>Parking fees: Rs. 200/-per hour. <br> **non-refundable.**</label>
	</fieldset>
	<footer>
	  <input type="submit" class="btnLogin" value="Proceed to Date & Time" tabindex="4">
	</footer>
</form>
	
	</section>
	<?php
			include('inc/footer.php');
	?>
	</section>
	
</body>
</html>