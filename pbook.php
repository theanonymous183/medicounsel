<?php
include("connect.php");
$query="select distinct specialist from tbl_doctor";
$res=mysql_query($query);
?>
	<html>
	<head>
	<style>
#outer
	{
	
height:700px;
width:100%;
border:1px solid;
//background-color:#;
background-image:url('images/s.jpg');
background-size:100%100%;	
	}
#vinod
	{
height:300px;
width:600px;
//border:1px solid red;
background-color:;
margin-left:400px;
margin-top:200px;
//border-radius:20px;

	}
	
	</style>
	</head>
	<body>
	<div id="outer">
	<div id="vinod">
		<center><h1>Search Your Doctor<h1></center>
<center><form action="book.php" method="post">
<select name="spec">
<option value="">--select specialist--</option>

<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
	
<option><?php echo $row['specialist'];?></option>
<?php
}
?>
	</select>
	<input type="submit" value="search doctor"/>

</form></center>
</div>
</div>
</body>
	</html>