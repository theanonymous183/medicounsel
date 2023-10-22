~<?php
session_start();
$op=$_POST['op'];
$np=$_POST['np'];
$cnp=$_POST['cnp'];
$email=$_SESSION['patient'];
include("connect.php");
$query="select password from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
$pp=$row['password'];
}
if($pp==$op)
{
	if($op==$np)
{
	//echo "no change";
	header("Location:change.php");
}
	else if($np==$cnp)
{
	//echo "change hoga";
	$query2="update tbl_patient set password='$cnp' where email='$email'";
	mysql_query($query2);
	session_destroy();
	header("Location:login.php");
	
}
else
{
	//echo "nahi hoga";
	header("Location:change.php");
}
}
else
{
//echo "no change";
	header("Location:change.php");
}

?>