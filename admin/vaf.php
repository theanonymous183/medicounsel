<?php
include ("connect.php");
$query="select * from tbl_feedback	";
$res=mysql_query($query);
?>
	<html>
	<head>
		<link href="css/vaf.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
	<div id="outer">
	<div id="vinod">
<center><h1>View All Feedback</h1></center>	
<table border="1" align="center">
<tr>
	<th>S.No</th>
	<th>Feedback.Id</th>
	<th>Patient.Id</th>
	<th>Feedback</th>
	<th>Date</th>
</tr>
<?php
$i=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
<tr>
	<td><?php echo $i;?></td>
	<td><?php echo $row['feedid'];?></td>
	<td><?php echo $row['patid'];?></td>
	<td><?php echo $row['feedback'];?></td>
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