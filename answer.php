<?php
session_start();
include("connect.php");
$ans=$_POST['ans'];
//echo $ans;
$qid=$_POST['qid'];
//echo $qid;
$email=$_SESSION['patient'];
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pid=$row['regid'];
	echo $pid;
	
}
$query2="insert into tbl_answer(qid,regid,answer,date) values('$qid','$pid','$ans',curdate())";
mysql_query($query2);
	header("Location:pdiscuss.php");
?>