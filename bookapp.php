<?php
include("connect.php");
$did=$_REQUEST['did'];
//echo $did;
$query="select * from tbl_doctor where docid='$did'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH));
{
?>
	<html>
	<head>
	<style>
#outer
{
height:500px;
width:500px;
border:1px solid;
margin-top:100px;
background-color:cyan;
}
	</style>
	</head>
	<body>
	<center><div id="outer">
	<div style="height:150px; width:150px; border:1px solid;">
	<img src="images/<?php echo $row['file'];?>" height=150px" width="150px/>"
	</div>
	<form action="booknow.php" method="post">
	<input type="hidden" name="did" value="<?php echo $row['docid'];?>">
	Doctor Name
	<input type="text" name="name" value="<?php echo $row['name'];?>"/>
	</br></br>
	Email
	<input type="email" name="email" value="<?php echo $row['email'];?>"/>
	</br></br>
	Date
	<input type="date" name="date"/>
	</br></br>
	<input type="submit" value="book Now"/>
	</form></center>
	</div>
	</body>
</html>
<?php
}
?>