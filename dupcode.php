<?php
session_start();
$id=$_POST['id'];
//echo $id;
$dn=$_POST['dn'];
//echo $dn;
$fn=$_POST['fn'];
//echo $fn;
$g=$_POST['a'];
//echo $g;
$m=$_POST['m'];
//echo $m;
$address=$_POST['address'];
//echo $address;
include("connect.php");
echo $query="update tbl_doctor set name='$dn',fname='$fn',gender='$g',mobile='$m',address='$address' where docid='$id'";
mysql_query($query);
header("Location:dprofile.php");
?>