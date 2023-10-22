<?php
include("connect.php");
$query="select * from tbl_question";
$res=mysql_query($query);
?>
	<html>
	<head>
	<style>
#outer
	{
height:700px;
width:70%;
border:1px solid green;
margin-left:200px;
background-color:#c0c0c0;
background-image:url('images/accounting-aerial-businesswoman-1043506.jpg');
background-cover:100% 100%;
	}
#vinod
	{
height:300px;
width:400px;
//border:1px solid;
margin-top:200px;
margin-left:430px;
border-radius:25px;
	}
	input
	{
height:50px;
width:100px;
border:1px solid;
	}
	</style>
	</head>
	<body>
	<div id="outer">
	<div id="vinod">
	<center><h1>Ask Your Question</h1></center>
	</br>
	
	
<center><form action="question.php" method="post">
Add Question
<textarea name="ques">
</textarea>
</br></br>
<input type="submit" value="Add"/>
</br></br>
</form>
<table border=1px>
<tr>
<th>S No</th>
<th>Question</th>
<th>Post Question</th>
<th>View  Answer</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	
?>
	<tr>
	<td><?php echo $a;?></td>
	<td><?php echo $row['question'];?></td>
	<td><a href="post.php?qid=<?php echo $row['0']?>">post answer</a></td>
	<td><a href="view.php?qid=<?php echo $row['0']?>">view answer</a></td>
	</tr>
	<?php
	$a++;
}

?>
	</div>
	</div>
</body>
	</html>
</table></center>