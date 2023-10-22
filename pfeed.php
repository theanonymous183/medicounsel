<?php

?>
<html>
<head>
<style>
#outer
{
height:800px;
width:1200px;
border:1px solid;
margin-left:150px;
background-image:url('images/c.jpg');
background-cover100%100%;
}
input
{
height:50px;
width:150px;
border:1px solid;
}
#vinod
{
height:300px;
width:600px;
border:1px solid;
margin-top:250px;
margin-left:250px;
}
</style>
</head>
<body>
<div id ="outer">
<div id="vinod">
<center><h1>Feedback</h1></center>
<center><form action="pfeedcode.php" method="post">
Feedback
<textarea name="address"></textarea>
</br></br>
<input type="submit" value="send"/>
</form></center>
</div>
</div>
</body>
</html>
