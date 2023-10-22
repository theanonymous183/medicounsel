<html>
	<head>
	<style>
#outer
{
height:100%;
width:100%;
border:1px solid;
background-color:blue;
}
#text
{
height:300px;
width:700px;
border:1px solid;
margin-top:200px;
background-color:white;
border-radius:100px;
}
</style>
	</head>
	<body>
<center>	<div id="outer">
<div id="text">
	<?php
$qid=$_REQUEST['qid'];
//echo $qid;
include("connect.php");
$query="select * from tbl_answer where qid='$qid'";
$res=mysql_query($query);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
echo $row['answer'];
echo "<br/>";
}

?>
	</div>
</div></center>
	</body>
	</html>