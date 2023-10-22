<?php
session_start();
include("connect.php");
$email=$_SESSION['patient'];
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
  $pid=$row['patid'];	
}
$query2="select * from tbl_appointment where appid='$pid'";
$res2=mysql_query($query2);
?>
	<h1>My Appointment</h1>
	<table border="1px" style="color:green;">
	<tr>
	<th>S NO</th>
	<th>Patient Name </th>
	<th>Doctor Name</th>
	<th>Date</th>
	</tr>
	<?php
	$a=1;
	while($row2=mysql_fetch_array($res2=MYSQL_BOTH))
{
?>
	<tr>
	<td><?php echo $a;?></td>
	<?php echo $row2['regid'];
	$query3="select * from tbl_patient where regid='$ppid'";	
	$res3=mysql_query($query3);
	if($row3=mysql_fetch_array($res3,MYSQL_BOTH))
{
	$pname=$row3['name'];
	
}
	?>
	<td><?php echo $pname;?></td>
	<?php $did=$row2['docid'];
	$query4="select * from tbl_docter where docid='$did'";	
	$res4=mysql_query($query4);
	if($row4=mysql_fetch_array($res4,MYSQL_BOTH))
{
	$dname=$row4['name'];
	
}
	
	?>
	<td><?php echo $row4['name'];?></td>
	<td><?php echo $row2['date']?></td>
	</tr>
<?php
$a++;
}
?>
	</table>