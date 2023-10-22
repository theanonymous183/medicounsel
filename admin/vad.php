<?php

include ("connect.php");
$query="select * from tbl_doctor";
$res=mysql_query($query);
?>
	<html>
	<head>
	<style>
	#outer
{
height:1200px;
width:100%;
border:1px solid;
background-color:#ac7fb3;
}
	</style>
	<head>
	<body>
	<div id ="outer">
<table border="1" align="center">
<tr>
	<th>S.No</th>
	<th>Doctor Id</th>
	<th>Doctor Name</th>
	<th>Fname</th>
	<th>Gender</th>
	<th>Email</th>
	<th>Password</th>
	<th>Mobile</th>
	<th>Uploadpic</th>
	<th>Address</th>
	<th>Specailist</th>
	<th>Timing</th>
	<th>Fees</th>
	<th>Date</th>
</tr>
<?php
$i=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
	<td><?php echo $i;?></td>
	<td><?php echo $row['docid'];?></td>
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['fname'];?></td>
	<td><?php echo $row['gender'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['password'];?></td>
	<td><?php echo $row['mobile'];?></td>
	<td><img src="doctor<?php echo $row['file'];?>"height="50px" width="50px"></td>
	<td><?php echo $row['address'];?></td>
	<td><?php echo $row['specialist'];?></td>
	<td><?php echo $row['timing'];?></td>
	<td><?php echo $row['fees'];?></td>
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