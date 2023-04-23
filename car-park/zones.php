
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<style>
table {
  border-collapse: collapse;
  width: 100%;
  vertical-align: center;
  
  
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
 
}

tr:hover {background-color: coral;  color: white;}
</style>
<title>Parking Zones</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('inc/head.php');
			include('inc/connect.php');
	?>
</head>
<body style="background-color:#1C5A7B;">
	<section id="container">
	<?php
			include('inc/header.php');
						
	?>
	
	<section id="content">
	<img style="position:absolute; z-index:-1; margin:0;"/>
	<p class="phead">Parking Lots Status</p>
	
<table class="gridtable" style="background-color: #51dff5;">
<?php $street ="Lane 1"; ?>

<tr>
    <th>Slot ID</th>
    <th>Slot</th>
    <th>Availability</th>
  </tr>
<tr>

	<td <?php 
	$sql="SELECT * FROM zones WHERE plot='1' and status='RESERVED'";
	
	//$sql="SELECT * FROM zones,status WHERE zones.street='$street' and zones.plot='P001' and zones.status='RESERVED' or status.ID='1' and status.slotStatus='0'";
	$result=mysqli_query($connect, $sql);
	$sql1="SELECT * FROM status WHERE ID='1' and slotStatus='0'";
	$count=mysqli_num_rows($result);
	$result1=mysqli_query($connect, $sql1);
	$count1=mysqli_num_rows($result1);
	if($count==1 or $count1==1){
	echo "style=\"background: #ed2d2d;\"";}
	?>>P001</td>
	<td <?php 
	$sql="SELECT * FROM zones WHERE plot='1' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	$sql1="SELECT * FROM status WHERE ID='1' and slotStatus='0'";
	$result1=mysqli_query($connect, $sql1);
	$count1=mysqli_num_rows($result1);
	if($count==1 or $count1==1){
	echo "style=\"background: #ed2d2d;\"";}
	?>>
	Slot 1</td>
	<td <?php 
	$sql="SELECT * FROM zones WHERE plot='1' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	$sql1="SELECT * FROM status WHERE ID='1' and slotStatus='0'";
	$result1=mysqli_query($connect, $sql1);
	$count1=mysqli_num_rows($result1);
	if($count==1 or $count1==1){
	echo "style=\"background: #ed2d2d;\"";
?>
>
	Not Available</td>
<?php
}
	?>	
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE plot='2' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	$sql1="SELECT * FROM status WHERE ID='2' and slotStatus='0'";
	$result1=mysqli_query($connect, $sql1);
	$count1=mysqli_num_rows($result1);
	if($count==1 or $count1==1){
	echo "style=\"background: #ed2d2d;\"";}
	?>>P002</td><td <?php 
	$sql="SELECT * FROM zones WHERE plot='2' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	$sql1="SELECT * FROM status WHERE ID='2' and slotStatus='0'";
	$result1=mysqli_query($connect, $sql1);
	$count1=mysqli_num_rows($result1);
	if($count==1 or $count1==1){
	echo "style=\"background: #ed2d2d;\"";}
	?>>
	Slot 2</td>
	<td <?php 
	$sql="SELECT * FROM zones WHERE plot='2' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	$sql1="SELECT * FROM status WHERE ID='2' and slotStatus='0'";
	$result1=mysqli_query($connect, $sql1);
	$count1=mysqli_num_rows($result1);
	if($count==1 or $count1==1){
	echo "style=\"background: #ed2d2d;\"";
?>
>
	Not Available</td>
<?php
}
	?>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE plot='3' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	$sql1="SELECT * FROM status WHERE ID='3' and slotStatus='0'";
	$result1=mysqli_query($connect, $sql1);
	$count1=mysqli_num_rows($result1);
	if($count==1 or $count1==1){	
	echo "style=\"background: red;\"";}
	?>>P003</td><td <?php 
	$sql="SELECT * FROM zones WHERE plot='3' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	$sql1="SELECT * FROM status WHERE ID='3' and slotStatus='0'";
	$result1=mysqli_query($connect, $sql1);
	$count1=mysqli_num_rows($result1);
	if($count==1 or $count1==1){
	echo "style=\"background: #ed2d2d;\"";}
	?>>
	Slot 3</td>
	<td <?php 
	$sql="SELECT * FROM zones WHERE plot='3' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	$sql1="SELECT * FROM status WHERE ID='3' and slotStatus='0'";
	$result1=mysqli_query($connect, $sql1);
	$count1=mysqli_num_rows($result1);
	if($count==1 or $count1==1){
	echo "style=\"background: #ed2d2d;\"";
?>
>
	Not Available</td>
<?php
}
	?>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE plot='4' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	$sql1="SELECT * FROM status WHERE ID='4' and slotStatus='0'";
	$result1=mysqli_query($connect, $sql1);
	$count1=mysqli_num_rows($result1);
	if($count==1 or $count1==1){	
	echo "style=\"background: red;\"";}
	?>>P004</td><td <?php 
	$sql="SELECT * FROM zones WHERE plot='4' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	$sql1="SELECT * FROM status WHERE ID='4' and slotStatus='0'";
	$result1=mysqli_query($connect, $sql1);
	$count1=mysqli_num_rows($result1);
	if($count==1 or $count1==1){
	echo "style=\"background: #ed2d2d;\"";}
	?>>
	Slot 4</td>
	<td <?php 
	$sql="SELECT * FROM zones WHERE plot='4' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	$sql1="SELECT * FROM status WHERE ID='4' and slotStatus='0'";
	$result1=mysqli_query($connect, $sql1);
	$count1=mysqli_num_rows($result1);
	if($count==1 or $count1==1){
	echo "style=\"background: #ed2d2d;\"";
?>
>
	Not Available</td>
<?php
}
	?>
</tr>





</table>
	
	<!--
	
	<p class="status">Red -> Reserved/Occupied , Yellow -> Available</p>
	
-->
	</section>
	<?php
			include('inc/footer.php');
	?>
	</section>
	
</body>
</html>