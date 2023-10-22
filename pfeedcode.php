<?php
session_start();
include("connect.php");
$add=$_POST['address'];
//echo $add;
	$email=$_SESSION['patient'];
	$query="select * from tbl_patient where email='$email'";
	$res=mysql_query($query);
	if($row=mysql_fetch_array($res,MYSQL_BOTH))
	{
		$pat=$row['patid'];
		
	}
	$query1="insert into tbl_feedback(patid,feedback,date) values('$pat','$add',now())";
	mysql_query($query1);
	//echo "ho gaya";
	header("location:pfeed.php");
	
	?>