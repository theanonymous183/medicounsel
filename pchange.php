<?php
?>
<html>
<head>
<style>
#outer
{
height:400px;
width:1000px;
//border:1px solid;
margin-top:100px;
//background-color:#008080;
background-image:url('images/z.jpg')

}
input
{
margin-top:20px;
margin-bottom:20px;
}
</style>
<link href="css/change.css" rel="stylesheet" text="css/text"/>
</head>
<body>
<center><div id="outer">
<h1>Change Password</h1>
<form action="changecode.php" method="post">
<table>
<tr>
<td>Old password</td>
<td><input type="text" name="op"/></td>
</tr>
<tr>
<td>New password</td>
<td><input type="text" name="np"/></td>
</tr>
<tr>
<td>Conifrm password</td>
<td><input type="text" name="cnp"/></td>
</tr>
<tr>
<td><input type="submit" value="change password"/></td>
</tr>
</table>
</form>
</div>
</div>
<div id="footer">
</div>
</div></center>
</body>
</html>
