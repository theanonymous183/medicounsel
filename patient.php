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
background-color:khaki;
}
#menu
{
height:150px;
width:100%;
//border:1px solid;
background-color:skyblue;
}
#menu1
{
height:148px;
width:9%;
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
border:none;
border-radius:15px;
margin-top:-15px;
background-color:skyblue;
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
 background-color:green;
 }
#outer
{
height:900px;
width:auto%;
border:1px solid;
background-image:url('../images/k.jpeg');
//background-size:cover;
//position:center;
margin:0px auto;
}
/*#logo
{
height:150px;
width:300px;
border:1px solid;
margin:200px auto;
}*/
#a
{
height:600px;
width:550px;
//border:1px solid;
//margin:0px auto;
margin-left:415px;
margin-top:150px;
background-image:url('images/tum.jpg');
border-radius:15px;
}
#a1
{
height:50px;
width:550px;
//border:1px solid;
margin-top:50px;

}
input
{
background-color:pink;
opacity:0.6;
//border:1px solid black;
}
textarea
{
background-color:pink;
border:1px solid black;
opacity:0.6;
}
select
{
background-color:pink;
border:1px solid black;
opacity:0.5;
}
#menu4
 {
height:400px;
width:100%;
background-color:black;
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
#v1
{
height:70px;
width:500px;
//border:1px solid;
float:right;
color:blue;
}
input
{
margin-top:15px;
}
</style>
</head>
<body>
<div id="menu">
 <div id="menu1"><img src="images/logo.png" height="148px" width="150px"/></div>
 <div id="write">
  
<div id="write2">
<center><h1>MEDICOUNSEL</h1></center>
</div>
 </div>
 </div>
 <div id="menu2">
 <ul> 
 
 <li><a li href="index.php">HOME</li></a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <li><a li href="about us.php">ABOUT </li></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <li <a li href="docter.php">DOCTOR</li></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     <li <a li href="patient.php">PATIENT</li></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	  <li <a li href="login.php">LOGIN</li></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	  <a li href="contactus.php">CONTACTUS</li></a>  
 </ul>
 </div>
 
<div id="outer">


<div id="a">
<div id="a1"><center><h1 align="bottom-15px" style="margin-top:50px;">Patient Register Here</h1> 
<table>
<form action="patientcode.php" method="post">
<tr>
<td>Name</td>
<td><input type="text" name="name" placeholder="Enter your Name"/></td>
</tr>
<br/>
<td>F'name</td>
<td><input type="text" name="fn" placeholder="Enter your Father name"/></td>
</tr>
</br>
<tr>
<tr>
<td>Select gender</td>
<td><input type="radio" name="a" value="male"/>Male
<input type="radio" name="a" value="female"/>Female</td>
</tr>
</br>
<tr>
<td>Email</td>
<td><input type="emil" name="e" placeholder="Enter your Email"/></td>
</tr>
</br>
<tr>
<td>Password</td>
<td><input type="password" name="p" placeholder="Enter your password"/></td>
</tr>
</br>
<tr>
<td>Mobile</td>
<td><input type="number"  name="mobile" placeholder="Enter your mobile number"/></td>
</tr>
</br>

<tr>
<td>Address</td>
<td><textarea maxlenght="10" name="address" placeholder="Enter Your Address">
</textarea></td>
</tr>
</br>
<tr>
<td>Pincode</td>
<td><input type="number" name="number" placeholder="Enter your Pincode">
</tr>
</br>
<tr>
<td><input type="submit" value="Register" style="height:30px;  width:130px;"/></td>
<tr/>
<tr>
<td>Already Register<a href="login.php">Click Here</a></td>
</tr>
</table>
</form>
</div>
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
		  <a l1 href="#">School of medicine</li></a>
		  </br> </br> </br>
		 </ul>
		  </div>
		 <div id="left7">
		 <ul><h1 style="color:white">Researchers</h1></ul>
		  <ul>
		  <a l1 href="#">Find Research Topics</li></a>
		  </br> </br> </br>
		  <a l1 href="#">Find Research Facaulty</li></a>
		  </br> </br> </br>
		  <a l1 href="#">Find a research lab</li></a>
		  </br> </br> </br>
		  <a l1 href="#">Advancements in research articals</li></a>
		  </br> </br> </br>
		 
		 </ul>

		 </div>
		 <div id="left8">
		<h1 style="color:white"> Contactus</h1>
		 <img src="images/loc.png" height="50px" width="50px">
<h3>location</h3>Softpro Tower,Near Hanuman temple,Kapoorthala,Aliganj,Lucknow-226 006</br></br>
<img src="images/ph.png" height="50px" width="50px">
<h3>Mobile No</h3>
8787006508,7390936983

 </div>
</body>
</html>


