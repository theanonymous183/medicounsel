<?php
include("connect.php");
$query="select * from tbl_question";
$res=mysql_query($query);
?>
	<html>
	<head>
		<link href="css/vdb.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
	<div id="outer">
	<div id="vinod">
<table border="1" align="center">
<tr>
<th>Sr.No</th>
<th>Patient Name</th>
<th>Question Answer</th>
<th>View Answer</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $a; ?></td>
<?php
$regid=$row['regid'];
$query2="select name from tbl_patient where patid='$regid'";
$res2=mysql_query($query2);
if($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
$name=$row2['name'];
}
?>
<td><?php echo $name;?></td>
<td><?php echo $row['question'];?></td>
<td><a href="viewans.php?qid=<?php echo $row['qid'];?>">view</a></td>
</tr>
<?php
$a++;
}
?>
	</div>
	</div>
</table>
</body>
</html>