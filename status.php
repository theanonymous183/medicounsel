	<?php
include("connect.php");
$aid=$_REQUEST['aid'];
//echo $aid;
$query="select status from tbl_appointment where appid='$aid'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$s=$row['status'];
}

if($s=='y')
 {
	 $query2="update tbl_appointment set status='N' where appid='$aid'";
	 mysql_query($query2);
	 header("Location:cancelappointment.php");
 }

 if($s=='N')
 {
	 $query2="update tbl_appointment set status='y' where appid='$aid'";
	 mysql_query($query2);
	 header("Location:cancelappointment.php");
 }


?>