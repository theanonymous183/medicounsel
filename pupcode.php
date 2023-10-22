<?php
session_start();
$id=$_POST['id'];
//echo $id;
$n=$_POST['n'];
//echo $n;
$fn=$_POST['fn'];
//echo $fn;
$g=$_POST['a'];
//echo $g;
$address=$_POST['address'];
//echo $address;
$pn=$_POST['pn'];
//echo $pn;
include("connect.php");
$query="update tbl_patient set name='$n',fname='$fn',gender='$g',address='$address',pincode='$pn' where patid='$id'";
mysql_query($query);
header("Location:pprofile.php");
?>