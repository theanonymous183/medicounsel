<?php
$n=$_POST['name'];
//echo $n;
$fn=$_POST['fn'];
//echo $fn;
$gender=$_POST['a'];
//echo $gender;
$e=$_POST['e'];
//echo $e;
$p=$_POST['p'];
//echo $p;
$mob=$_POST['mobile'];
//echo $mob;
$address=$_POST['address'];
//echo $address;
$pin=$_POST['number'];
//echo $pin;
include("connect.php");
$query="insert into tbl_patient(name,fname,gender,email,password,mobile,address,pincode,date) values('$n','$fn','$gender','$e','$p','$mob','$address','$pin', now())";
mysql_query($query);
//echo "thanks bhai log";
?>