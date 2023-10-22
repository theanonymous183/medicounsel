<?php
session_start();
include("connect.php");
$email=$_SESSION['doctor'];
$query="select * from  tbl_doctor where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
$docid=$row['docid'];
}
$query2="select * from tbl_appointment where docid='$docid'";
$res2=mysql_query($query2);
?>
	<html>
	<style>
#outer
{
height:700px;
width:100%;
border:1px solid;
background-color:khaki;
}
#vinod
{
height:400px;
width:600px;
//border:1px solid red;
border-radius:25px;
margin-top:130px;
margin-left:400px;
background-color:yellow;
}
	</style>
	<head>
	</head>
	<body>
	<div id="outer">
	<div id="vinod">
<center><h1>View Appointment</h1><center>
<table border="1" align="center">
<tr>
<th>S.No</th>
<th>Patient Name</th>
<th>Date</th>
</tr>
<?php
$a=1;
while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $a;?></td>
<?php $ppid=$row2['regid'];
$query3="select * from tbl_patient where patid='$ppid'";
$res3=mysql_query($query3);
if($row3=mysql_fetch_array($res3,MYSQL_BOTH))
{
$pname=$row3['name'];
}
?>
<td><?php echo $pname;?></td>
<td><?php echo $row2['date'];?></td>
</tr>
<?php
$a++;
}
?>

	</div>
	</div>
	</body>
	</html>
</table>