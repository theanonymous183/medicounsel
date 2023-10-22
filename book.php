<?php
include("connect.php");
$spec=$_POST['spec'];
//echo $spec;
$query="select * from tbl_doctor where specialist='$spec'";
$res=mysql_query($query);
?>
	<html>
	<head>
	<style>
#outer
	{
height:700px;
width:1000px;
border:1px solid;
background-color:#c5d0b7;
margin-left:150px;
background-image:url('images/vk2.jpg')
background-cover:100%100%;
 
	}

	
	</style>
	</head>
	<body>
	<div id="outer">
	<div id="menu">
<center>	
<table border="20px">
<tr>
<th>S.No</th>
<th>Name</th>
<th>Fname</th>
<th>Gender</th>
<th>Fees</th>
<th>Timing</th>
<th>Mobile</th>
<th>Book</th>

</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
	<tr>
	<td><?php echo $a;?></td>
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['fname'];?></td>
	<td><?php echo $row['gender'];?></td>
	<td><?php echo $row['fees'];?></td>
	<td><?php echo $row['timing'];?></td>
	<td><?php echo $row['mobile'];?></td>
	<td><a href="bookapp.php?did=<?php echo $row['docid'] ?>">Book appointment</a></td></center>
	</tr>
	<?php
$a++;
}
?>
</table>
</div>
</body>
	</html>