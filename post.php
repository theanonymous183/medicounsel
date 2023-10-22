<?php
$qid=$_REQUEST['qid'];
//echo $qid;
?>
	<html>
	<head>
	<style>
#outer
	{
height:300px;
width:600px;
border:1px solid;
margin-left:400px;
margin-top:200px;
background-color:skyblue;
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
	<center><h1>Add Your Answer</h1></center>
	<br/>
<center><form action="answer.php" method="post">
<input type="hidden" name="qid" value="<?php echo $qid;?>">
Add Answer
<textarea name="ans"></textarea>
</br></br></br>
<input type="submit" value="Add"/>
</form></center>
</div>
</body>
	</html>