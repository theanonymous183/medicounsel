<?php
?>
<html>
<head>
<style>
body{
	padding:0px;
	margin:0px;
}
#outer
{
height:100%;
width:100%;
border:1px solid;
background-color:skyblue;
}
#menu
{
height:200px;
width:100%;
border:0px solid;

}
#menu1
{
height:148px;
width:9%;
border:.01px solid;
//margin-left:50px;
float:left;
}
#write
{
height:138px;
width:89.50%;
//border:1px solid ;
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
height:200px;
width:100%;
background-color:#003153;
border:none;
margin-top:0px;
}
 #menu2 ul
 {
 list-style-type:none;
 }
 #menu2 ul li
 {
 display:inline;
padding:10px;
margin-left:5px;
border-radius:10px;
//border:1px solid;
 }
 #menu2 ul li a
 {padding:35px;
 font-size:1.2em;
 height:70px;line-height:70px;
 color:white;
 text-decoration:none;
 }
 #menu2 ul li:hover
 {
 background:linear-gradient(0deg,yellow,orange,blue);
 }
#outer
{
height:200px;
width:auto;
border:1px solid;
background-image:url('../images/AdobeStock_166606579_Preview.jpeg');
//background-size:cover;
//position:center;
margin:0px auto;
}
/*#logo
{
height:400px;
width:300px;
border:1px solid;
margin:200px auto;
}*/
#a
{
height:500px;
width:550px;
//border:1px solid;
//margin:0px auto;
margin-left:415px;
margin-top:150px;
background-image:url('/images/j.jpg');
border-radius:15px;
}
#a1
{
height:50px;
width:550px;
//border:1px solid;
}
input
{
background-color:pink;
opacity:0.6;
border:1px solid black;
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
#footer
{
height:400px;
width:25%;
border:1px solid;
color:red;
}
input
{
margin-top:20px;
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
  <div id="menu2">
 <ul> 
 <li><a li href="index.php">HOME</li></a>  
 <li><a li href="about.php">ABOUT</li></a>
   <li><a li href="doctor.php">DOCTOR</li></a>
    <li><a li href="patient.php">PATIENT</li></a>
	<li> <a li href="login.php">LOGIN</li></a>
	  <li><a li href="contactus.php">CONTACTUS</li></a>
	  
 </ul>
 </div>
 </div>
</div>
<div id="outer">
<div id="a">
<div id ="a1"><center><h1>Doctor Register Here</h1></center>

</div>
<form action="code.php" method="post" enctype="multipart/form-data"/>
<center><table>
<tr>
<td>Name</td>
<td><input type="text" name="dn" placeholder="Enter your Doctor Name"/></td>
</tr>
<br/>
<td>F'name</td>
<td><input type="text" name="fn" placeholder="Enter your Father name"/></td>
</tr>
<tr>
<tr>
<td>Select gender</td>
<td><input type="radio" name="a" value="male"/>Male
<input type="radio" name="a" value="female"/>Female</td>
</tr>
<tr>
<td>Email</td>
<td><input type="emil" name="e" placeholder="Enter your Email"/></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="p" placeholder="Enter your password"/></td>
</tr>
<tr>
<td>Mobile</td>
<td><input type="number"  name="m" placeholder="Enter your mobile number"/></td>
</tr>
<tr>
<td>Upload Pic</td>
<td><input type="file" name="file"></td>
</tr>
<tr>
<td>Address</td>
<td><textarea maxlenght="10" name="address" placeholder="Enter Your Address">
</textarea></td>
</tr>
<tr>
<td>Specialist</td>
<td><select name="sp">
<option value="">--Select--</option>
<option>Pulmonologists</option>
<option>Eye Specialist</option>
<option>Neurlogists</option>
<option>Ophthalmologists Specialist</option>
<option>Sargan</option>
</select></td>
</tr>
<tr>
<td>Timing</td>
<td><input type="text" name="t" placeholder="Enter Your Timing"/></td>
</tr>
<tr>
<td>Fees</td>
<td><input type="number" name="f" placeholder="Enter Your Fees"/></td>
</tr>
<tr>
<td><input type="submit" value="Register" style="height:30px;  width:130px;"/></td>
<tr/>
<tr>
<td>Already Register<a href="login.php">Click Here</a></td>
</tr>
</table></center>
</form>
</div>
<div id="footer1">
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
,7390936983

 </div>

</div>
</div>
</body>
</html>