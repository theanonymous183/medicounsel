<?php
$did=$_POST['did'];
//echo $did;

$pid=$_POST[pid];
//echo $pid;
//$y=$_POST[status];
//echo $y
//$doa =$_POST['date'];
//echo $doc;
$email $_SESSON['patient'];
$query="select*from tbl_patient where email='$email'";
$res =mysql_query($query);
if ($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pid-$row['patid'];
}
$query2="insert tbl_appointment(docid,patid,doa,status,date)
value('$did','$pid','$doa','$y',curdate)"

?>