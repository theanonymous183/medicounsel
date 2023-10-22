<?php

?>
<html>
<head>
<style>
#outer
{
height:auto%;
width:100%;
border:1px solid;
background-color:#adc7dc;
}
#menu
{
height:150px;
width:100%;
border:1px solid;
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
margin-top:20px;
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
 #menu3
 {
height:500px;
width:100%;
//border:1px solid;
 }
 #left3
 {
 height:500px;
 width:50%;
// border:1px solid;
 
 border-radius:25px;
 background-image:url('../images/vk2.jpg');
 float:left;

 }
 #right3
 {
 height:500px;
 width:49%;
 border:1px solid;
 border-radius:25px;
 float:right;
 }
 #map
 {
height:400px;
width:100%;
border:1px solid;
 }
 #menu4
 {
height:400px;
width:100%;
background-color:#ff9494;
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
 <div id="outer">
 <div id="menu">
 <div id="menu1"><img src="images/logo.png" height="148px" width="150px"/></div>
 <div id="write">
 <a href="#"><img src="images/you.png" height="70px" width="100px" align="right"/></a>
 <a href="#"><img src="images/tw.png" height="70px" width="100px" align="right"/></a>
<a href="#"><img src="images/fac.png" height="70px" width="100px" align="right"/></a>
<a href="#"><img src="images/vin6.jpg" height="70px" width="100px" align="right"/></a>
<a href="#"><img src="images/d.ico" height="70px" width="100px" align="right"/></a>
<div id="write2">
<center><h1>MEDICOUNSEL</h1></center>
</div>
 </div>
 </div>
 <div id="menu2">
 <ul> 
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 
 <li><a li href="index.php">HOME</li></a>  
   <li><a li href="about.php">ABOUT</li></a>
   <li> <a li href="doctor.php">DOCTOR</li></a>
   <li> <a li href="patient.php">PATIENT</li></a>
	 <li> <a li href="login.php">LOGIN</li></a>
	 <li><a li href="contactus.php">CONTACTUS</li></a>
	  
 </ul>
 </div>
 <div id="menu3">
 <div id="left3">
 <form action="contactuscode.php" method="post">
<center>
</br></br></br></br>
 Name
<input type="text" name="n"/>
 </br></br></br></br></br>
Email
 <input type="email" name="e">
 </br></br></br></br>
 </br>
 Mobile
 <input type="number" name="m"/>
 </br</br></br></br></br> 
 Message
 <input type="textarea" name="mess"/>
 </br></br></br></br></br>
 <input type="submit" value="send"/>
 </br></br></br></br></br>
 </center>

</div>
<div id="right3">
<center><h1>Company Address</h1></center>
<center>Softro India,Near New Hanuman Temple Kapoorthala,Aliganj,Lucknow-226 006</center>
</br>
<center><h1>Email id</h1></center>
<center>softroindia@gmail.com</center></br>
<center><h1>phone number</h1></center>
<center>8787006508 ,7390936983</center>
</div>
</div>
<div id="map"><iframe src="https://www.google.com/maps/embed?
pb=!1m14!1m8!1m3!1d14234.67795370525!2d80.94821!3d26.88224!3m2!1i1024!
2i768!4f13.1!3m3!1m2!1s0x0%3A0x730fe46201abc68a!2sSoftpro+India!5e0!3m
2!1sen!2sin!4v1411887056855" width="100%" height="100%"></iframe></div>
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
 
</form>
</body>
</html>