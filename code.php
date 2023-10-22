<?php
$dn=$_POST['dn'];
//echo $dn;
$fn=$_POST['fn'];
//echo $fn;
$gender=$_POST['a'];
//echo $gender;
$e=$_POST['e'];
//echo $e;
$p=$_POST['p'];
//echo $p;
$f=$_POST['f'];
//echo $f;
$t=$_POST['t'];
//echo $t;
$spe=$_POST['sp'];
//echo $spe;
$address=$_POST['address'];
//echo $address;
$m=$_POST['m'];
//echo $m;
$up=$_FILES['file']['name'];
//echo $up;
$type=$_FILES['file']['type'];
//echo $type;
$size=$_FILES['file']['size'];
//echo $size;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;
$location="doctor/";
include("connect.php");
 $query="insert into tbl_doctor(name,fname,gender,email,password,fees,timing,specialist,address,mobile,file,date) values('$dn','$fn','$gender','$e','$p','$f','$t','$spe','$address','$m','$up',now())";
mysql_query($query);
move_uploaded_file($tmp_name,$location.$up);
 echo "thanks bhai log";
//header("Location:login.php");
 
?>		