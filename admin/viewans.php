<?php
session_start();
include("connect.php");
$query="select * from tbl_answer";
$res=mysql_query($query);
//echo $res;
$row="mysql_fetch_array($res,MYSQL_BOTH)";
?>
	<html>
	<head>
		<link href="css/viewans.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
	<div id="outer">
	<div id="vinod">
<center><h1>View All Answer</h1></center>
<table border="1" align="center">
<tr>

<th>Sr No</th>
<th>Question Id</th>
<th>Patient Id</th>
<th>Answer</th>
<th>Date</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $a; ?></td>
<td><?php echo $row['qid']; ?></td>
<td><?php echo $row['regid']; ?></td>
<td><?php echo $row['answer']; ?></td>
<td><?php echo $row['date']; ?></td>
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