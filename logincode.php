<?php
session_start();
$who=$_POST['wh'];
//echo $who;
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;
include("connect.php");
if($who=='Doctor')
{
$query="select * from tbl_doctor where email='$email' and password='$password'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
     {
	$_SESSION['doctor']=$email;
	header("Location:dprofile.php");
	
     }
else	
    {
	header("Location:login.php");
    }
}
if($who=='Patient')
{
$query="select * from tbl_patient where email='$email' and password='$password'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
		$_SESSION['patient']=$email;
	header("Location:pprofile.php");

}
else
{

}
}
?>