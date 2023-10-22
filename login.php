<?php

?>
<html>
<head>
<style>
#outer
{
height:100%;
width:100%;
//border:1px solid;
background-color:yellow;
//background-image:url('images/ajay.php');
}
#menu
{
height:150px;
width:100%;
border:1px solid;
background-color:green;
}
#menu1
{
height:150px;
width:8%;
//border:1px solid;
//margin-left:50px;
float:left;
}
#write
{
height:148px;
width:89.50%;
//border:1px solid yellow;
float:right;
}
#write2
{
height:150px;
width:1000px;
//border:1px solid;
color:blue;
}
#menu2
{
height:50px;
width:100%;
//margin-bottom:20px;
padding:85px;
//margin-top:80px;
background-color:#c5d0b7;
}
 #menu2 ul
 {
 list-style-type:none;
 }
 #menu2 ul li
 {
 display:inline;
padding:16px;
border-radius:10px;
//border:1px solid;

 }
 #menu2 ul li a
 {
 color:white;
 text-decoration:none;
 }
 #menu2 ul li:hover
 {
 //background-color:green;
}
#vinod1
{
height:800px;
width:100%;
border:1px solid;
background-image:url('../images/vk.jpg');
}
 #vinod
 {
height:500px;
width:40%;
border:1px solid;
background-color:red;
background-image:url('../images/d.jpg');
margin-top:150px;
border-radius:500px 500px 500px 500px;
 }
#menu4
 {
height:400px;
width:100%;
background-color:pink;
 }
 #left0
 {
height:400px;
width:300px;
//border:1px solid;
float:left;
 }
 #left6
 {
height:400px;
width:300px;
//border:1px solid;
float:left;
 }
  #left7
 {
height:400px;
width:300px;
//border:1px solid;
float:left;
 }
 #left8
 {
height:400px;
width:300px;
//border:1px solid;
float:left;
color:blue;
margin-left:40px;
 }


</style>
</head>
<body>
<div id="menu">
 <div id="menu1"><img src="images/logo.png" height="148px" width="150px"/></div>
 <div id="write">
  
<center><h1>MEDICOUNSEL</h1></center>
</div>
 </div>
 <div id="menu2">
 <ul> 
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <a li href="index.php">HOME</li></a>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <a li href="about us.php">ABOUT US</li></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <a li href="patient.php">PATIENT</li></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	 <a li href="login.php">LOGIN</li></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	  <a li href="contactus.php">CONTACTUS</li></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	  
 </ul>
 </div>
 <div id="vinod1">
<center> <div id="vinod">
 <center><h1>Account</h1></center>
<h1>Login</h1>
<form action="logincode.php" method="post">
<tr>
<td><select name="wh">
<option >Who You are</option>
<option>Doctor</option>
<option>Patient</option>
</select></td>
</tr>
</br>
</br>
</br>
Email
<input type="email" name="email"/>
</br>
</br></br>
Password
<input type="password" name="password"/>
</br>
</br></br>
<input type="submit" value="Login"/>
<input type="button" value="Forgat Password"/>
</form></center>
</div>
<div id="menu4">
 <div id="left0">
 
           <ul><h1 style="color:white">patients</h1></ul>
		   <ul>
		   <a l1 href="#">Cnters &Departments</li></a>
		   </br> </br> </br>
		   <a l1 href="#">Diseases & Conditions</li></a>
		   </br> </br> </br>
		   <a l1 href="#">Get a second Opinion</li></a>
		   </br> </br> </br>
		   <a l1 href="#">International Patients</li></a>
		   </br> </br> </br>
		   <a l1 href="#">Search clinical Trials</li></a>
		   </br> </br> </br>
		   </ul>
		  </div>
		  <div id="left6">
		  <ul><h1 style="color:white">students</h1></ul>
		  <ul>
		  <a l1 href="#">Training</li></a>
		  </br> </br> </br>
		  <a l1 href="#">Student Portal</li></a>
		  </br> </br> </br>
		  <a l1 href="#">Office and administration</li></a>
		  </br> </br> </br>
		  <a l1 href="#">About the Medicounsel</li></a>
		  </br> </br> </br>
		 <li> <a l1 href="#">School of medicine</li></a>
		  </br> </br> </br>
		 </ul>
		  </div>
		 <div id="left7">
		 <ul><h1 style="color:white">Researchers</h1></ul>
		  <ul>
		  <li><a l1 href="#">Find Research Topics</li></a>
		  </br> </br> </br>
		  <li><a l1 href="#">Find Research Facaulty</li></a>
		  </br> </br> </br>
		  <li><a l1 href="#">Find a research lab</li></a>
		  <li></br> </br> </br>
		  <li><a l1 href="#">Advancements in research articals</li></a>
		  </br> </br> </br>
		 
		 </ul>

		 </div>
		 <div id="left8">
		<h1 style="color:white"> Contactus</h1>
		 <img src="images/loc.png" height="50px" width="50px">
<h3>location</h3>Softpro Tower,Near Hanuman temple,Kapoorthala,Aliganj,Lucknow-226 006</br></br>
<img src="images/ph.png" height="50px" width="50px">
<h3>Mobile No</h3>
8787006508 ,7390936983

 </div>
</div

</body>
</html>