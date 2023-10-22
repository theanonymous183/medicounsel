<?php
include("connect.php")
$did=$_REQUEST['did'];
//scho $did;

$query="selete*from tbl_doctor where docid ='$did'";
$res =mysql _query ($query);
<select name "spa">
//<option value="">--Selete speciality--</option>
//<?php
if($row =mysql _fetch_array($res,MYSQL_BOTH))
{
?>
<div style="height:150px;border ipx solid;">!
<img  src ="doctor/<?php echo $row['tum'];?">height="150px;"width=150px;"/>


<form action ="booknow.php" method = >
<input type ="hidden"name ="did"value="<?php echo $row['docid'];?>"/>
name
<input type="text"name ="name"/></br>
gender
<input type="email"name ="email"value"<?php echo $row ['email'];?>"/>
</br>
date
<input type="date" name="date"/>
</br>
<input type="submit" value="book now"/>
</br>

</form>




	
<?php
}
?>
