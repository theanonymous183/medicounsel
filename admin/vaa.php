<?php
include ("connect.php");
$query="select * from tbl_appointment";
$res=mysql_query($query);
?>
	<html>
	<head>
		<link href="css/vaa.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
	<div id="outer">
	<div id="vinod">
	<center><h1>View All Appointment</h1></center>
<table border="1" align="center">
<tr>
	<th>S.No</th>
	<th>Appointment.Id</th>
	<th>Doctor Id</th>
	<th>Patient Id</th>
	<th>Date of Appointment</th>
	<th>Status</th>
	<th>Date</th>
</tr>
<?php
$i=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
<tr>
	<td><?php echo $i;?></td>
	<td><?php echo $row['appid'];?></td>
	<td><?php echo $row['regid'];?></td>
	<td><?php echo $row['regid'];?></td>
	<td><?php echo $row['doa'];?></td>
	<td><?php echo $row['statuss'];?></td>
	<td><?php echo $row['date'];?></td>
</tr>
<?php
$i++;
}
?>
	</div>
	</div>
	</table>
	</body>
	</html>