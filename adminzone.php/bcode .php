<?php
include("connection'php");
query="selete  distint specialization from tbl_doctor";
$res=mysql_query($query);
?>
<form action="book.php method="post">
<select name "spa">
<option value="">--Selete speciality--</option>
<?php
while($row =mysql _fetch_array($res,MYSQL_BOTH))
{
?>
<option><?php echo $row ['specialization']?></option>
<?php
}
?>
</selete>
<input type ="subit " search doctor ">
</form >