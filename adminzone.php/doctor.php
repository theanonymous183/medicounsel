<?php
?>
<html>
<head>
<style>

#outer
{
	height:750px;
	width:1300px;
	border:1px solid red;
	background-color :#00FFFF;
opacity:0.8

}
#csk
{
	height:450px;
	width:650px;
	border:1px solid red;
	background-color:#008080;
	//opacity:0.6;
margin:50px;
}
#csk1
{
	height:20px;
	width:648px;
	//border:1px solid ;
	background-color:;
#top
{
height:200px;
width:1300px;
border:1px solid;
}
//#top
//{
//height:200px;
//width:300px;
//border:1px solid;
//float:left;
}
//#topu
//{
//height:50px;
//width:800px;
//border:1px solid;
//float:left;
//}
//#topr
//{
//height:50px;
//width:194px;
//border:1px solid;
//float:left;
//}
#menu ul
{
	list-style:none;
margin-left:8px;	
}
#menu
{
height:60px;
width:1300px;
background-color:khaki;
border-top:1px solid;
float:left;
}
#menu ul li:hover
{
	border:0px solid;
	border-radius:14px;
	background-color:limegreen;
	box-shadow:4px 4px 10px black;
}
#menu ul li
{
display:inline;
margin-top:4px;
font-size:24px;
border-right:4px solid orange;
//border-left:1px solid black;
//border-top-width:1px ;
padding:16px;
padding-left:30px;
padding-right:30px;

}
#menu ul li a
{
text-decoration:none;
}
#mnop
{
	height:245px;
	width:1300px;
	//border:1px solid red;
	background-color:#DCDCDC;
	
}
#mnop1
{
	height:245px;
	width:433px;
	border:1px solid red;
	float:left;
}
#mnop2
{
	height:245px;
	width:433px;
	border:1px solid red;
	float:left;
}
#mnop3
{
	height:245px;
	width:428px;
	border:1px solid red;
	float:left;
}
</style>

</head>
<body>
<div id ="outer">
<div style="border:1px solid;width:100%;height:140px;background-color:aquamarine;">
<center><img src="logo.png"  height="142px"/></center>
</div>
<div id="menu" style="height:60px;">
<ul>
<li style="border-left:0px solid;"><a href="index.php" >Home</a></b></li>
<li><a href="about.php">About</a></li>
<li><a href="doctor.php">Doctor</a></li>
<li><a href="patient.php">Patient</a></li>
<li><a href="login.php">Login</a></li>
<li style="border-right:0px solid;"><a href="contact.php" >Contact us</a></li>
</ul>
</div>
<div id ="outer">
<div id="csk">
<div id="csk1"><center><font color="white">DOCTOR</font></center></div>
<center>
<form action="doctorcode.php"method="post">
NAME:
<input type="text" name="name"></br></br>
F'NAME:
<input type="text" name="fname"></br></br>
GENDER:
<input type="radio" name="a" value="male">MALE
<input type="radio" name="a" value="female">FEMALE
</br></br>
EMAIL:
<input type="email" name="email"></br></br>
PASSWORD:
<Input type="password" name="password"></br></br>
MOBILE:
<Input TYPE="number" name ="number"></br></br>
SPECIALIST:
<select name="speciality">
<option value="">Select</option>
<option value="physician ">Physician</option>
<option value="ortho">Ortho</option>
<option value="dentist">Dentist</option>
<option value="surgeon">Surgeon</option>
<option value="cardiologists">Cardiologists</option><br/><br/>
</select></br></br>
ADDRESS:
<textarea name="address">

</textarea></br></br>
FESS:
<input type ="number" name="fees"></br>
TIMING:
<input type="time" name="timing"></br></br>
Uplode photo:
<input type="file" name="file"/></br></br>

<input type="submit" value="Register"/>
All ready register <a href="#">click here</a>


</form>
</center>
</div>
</div>
</div>
<div id="doctorfooter">
                         <div id ="doctorfooter1" align="center">
												<h3>	MORE INFO</h3>
medicounsel reister online.you can register for free,just enter basic patient information to get stated
</div>
<div id ="doctorfooter2" align="center">
<h3>COMMINTTED INDIA</h3>
The mission of sibley memorial hospital is toproved quelity health services and faclities for the communty.
</div>

<div id ="doctorfooter3"align="center">
<h3>STAY COMMINTTED</h3>
fonunded in 2019,media &entertainment skile councle.
</div>
<div>
<div id ="doctorlostfooter">
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">copyright:&copy;</a> &nbsp;&nbsp;&nbsp;made &by vivek dhoni csk future fast bolwer ,softpro india
</div>
</div>
</body>
</html>