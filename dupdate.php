<html>
<head>
<style>
#outer
{
height:90%;
width:100%;
border:1px solid;
background-image:url('images/k.jpg');
background-size:100% 100%;
}
#vinod
{
height:400px;
width:500px;
//border:1px solid;
margin-left:400px;
border-radius:25px;
background-color:pink;
opacity:0.7;
margin-top:100px;

}
</style>
</head>
<body>
<div id="outer">
<div id="vinod">
<?php
session_start();
$email=$_SESSION['doctor'];
include ("connect.php");
$query="select * from tbl_doctor where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
	<center>
<h1>Update Profile</h1>
<form action="dupcode.php" method="post">
<input type="hidden" name="id" value="<?php echo $row['0'];?>"/>
<table>
<tr>
<td>Doctor Name</td>
<td><input type="text" name="dn" value="<?php echo $row['name'];?>"/></td>
</tr>
<tr>
<td>F'Name</td>
<td><input type="text" name="fn" value="<?php echo $row['fname'];?>"/></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="a" value="male"<?php if($row['gender']=='male'){?> checked <?php }?>/>Male
<input type="radio" name="a" value="fmale"<?php if($row['gender']=='female'){?> checked <?php }?>/>Female</td>
</tr>
<tr>
<td>Mobile</td>
<td><input type="number" name="m" value="<?php echo $row['mobile'];?>"/></td>
</tr>
<tr>
<td>Address</td>
<td><textarea maxlength="200" name="address">
<?php echo $row['address'];?>
</textarea></td>
</tr>
<tr>
<td><input type="submit" value="update"/></td>
</tr>
</table>
	</form>
	</center>
	<?php
}
?>
	</div>
	</div>
	</body>
	</html>