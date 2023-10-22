<?php
$n=$_POST['n'];
//echo $n;
$e=$_POST['e'];
//echo $e;
$m=$_POST['m'];
//echo $m;
$mess=$_POST['mess'];
//echo $mess;
include("connect.php");
$query="insert into tbl_contact(name,email,mobile,massage,date) values('$n','$e','$m','$mess',now())";
mysql_query($query);
echo "thanks";
?>