<?php
session_start();
$email=$_SESSION['patient'];
include ("connect.php");
$query="select * from tbl_patient where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<h1>Update Profile</h1>
<form action="pupcode.php" method="post">
<input type="hidden" name="id" value="<?php echo $row['0'];?>"/>
Name 
<input type="text" name="n" value="<?php echo $row['name'];?>"/>
<br/>
F'Name
<input type="text" name="fn" value="<?php echo $row['fname'];?>"/>
<br/>
Gender
<input type="radio" name="a" value="male"<?php if($row['gender']=='male'){?> checked <?php }?>/>Male
<input type="radio" name="a" value="fmale"<?php if($row['gender']=='female'){?> checked <?php }?>/>Female
<br/>
Address
<textarea maxlength="200" name="address">
<?php echo $row['address'];?>
</textarea>
<br/>
Pin Code
<input type="number" name="pn" value="<?php echo $row['pincode'];?>"/>
<br/>
<input type="submit" value="update"/>
	</form>
	<?php
}
?>