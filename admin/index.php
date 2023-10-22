<?php

?>
<html>
<head>
<style>
#outer
{
height:700px;
width:100%;
border:1px solid;
background-image:url("images/23316667_1774643645989931_4919006281903420749_n.jpg");
}
#vinod
{
height:400px;
width:500px;
border-radius:50%;
//border:1px solid;
background-color: #4c4646;
margin-left:400px;
margin-top:140px;
opacity:.9;
}
#v1
{
	margin-top:20px;
height:102px;
width:102px;
//border:1px solid;
margin-top:10px;
}
</style>
</head>
<body>
<div id="outer">
<div id="vinod">
<center><div id ="v1">
<img src="images/admin.png"height="100px" width="100px">
</div></center>

<center><h1>Admin Login</h1></center>
<center><form action="adprofile.php" method="post">
Email
<input type="email" name="email"/>
</br></br>
Password
<input type="password" name="password"/>
</br></br>
<input type="submit" value="Login"/>
</br></br>
</form>
<a href="../index.php">Back to Index</a>
</center>
</body>
</div>
</div>
</body
</html>