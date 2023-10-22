<?php
include ("connect.php");
$query="select * from tbl_patient";
$res=mysql_query($query);
?>
	<html>
	<head>
	<link href="css/vap.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
	<div id="outer">
	
<table border="1" align="center">
<tr>
	<th>S.No</th>
	<th>Patient.Id</th>
	<th>Name</th>
	<th>Fname</th>
	<th>Gender</th>
	<th>Email</th>
	<th>Password</th>
	<th>Mobile</th>
	<th>Address</th>
	<th>Pin Code </th>
	<th>Date</th>
</tr>
<?php
$i=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
<tr>
	<td><?php echo $i;?></td>
	<td><?php echo $row['patid'];?></td>
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['fname'];?></td>
	<td><?php echo $row['gender'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['password'];?></td>
	<td><?php echo $row['mobile'];?></td>
	<td><?php echo $row['address'];?></td>
	<td><?php echo $row['pincode'];?></td>
	<td><?php echo $row['date'];?></td>
</tr>
<?php
$i++;
}
?>
	</div>
	</table>
	</body>
	</html>