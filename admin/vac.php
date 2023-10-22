<?php
include ("connect.php");
$query="select * from tbl_contact";
$res=mysql_query($query);
?>
	<html>
	<head>
	<style>
	#outer
{
height:700px;
width:100%;
border:1px solid;
background-color:#a62eff;
}
#vinod
{
height:500px;
width:100%;
//border:1px solid;
margin-top:100px;
}
	
	
	</style>
	</head>
	<body>
	<div id="outer">
	<div id="vinod">
<table border="1" align="center">
<tr>
	<th>S.No</th>
	<th>Contact.ID</th>
	<th>Name</th>
	<th>Email Id</th>
	<th>Mobile.No</th>
	<th>Message</th>
	<th>Date</th>
</tr>
<?php
$i=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
<tr>
	<td><?php echo $i;?></td>
	<td><?php echo $row['contid'];?></td>
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['mobile'];?></td>
	<td><?php echo $row['massage'];?></td>
	<td><?php echo $row['date'];?></td>
</tr>
<?php
$i++;
}
?>
	</div>
	<div>
	</table>
	</body>
	</html>