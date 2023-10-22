<?php

?>
<html>
<head>
<style>
#outer
{
height:100%;
width:100%;
border:1px solid;
background-color:#ff6d98;
//background-image:url('images/AdobeStock_232232114_Preview.jpeg')
}
#left
{
height:100%;
width:22%;
border:1px solid;
float:left;
}
#admin
{
height:100px;
width:322px;
border:1px solid;
}
#admin1
{
height:40px;
width:322px;
border:1px solid;
}
#left ul
 {
 list-style-type:none;
 }
 #left ul li
 {
 //display:block;
padding:10px;
border-radius:10px;
//border:1px solid;
 }
 #left ul li a
 {
 //color:white;
 text-decoration:none;
 }
 #left ul li:hover
 {
 background-color:gray;
 }
#right
{
height:50px;
width:77.6%;
border:1px solid;
float:right;
}
#right1
{
height:250px;
width:77.6%;
//border:1px solid;
margin-top:50px;
float:right;
}
#r1
{
height:250px;
width:22%;
//border:1px solid;
box-shadow:4px 4px 20px black;
float:left;
margin-left:31px;
border-radius:0px 50px 10px 50px;
background-color:lightpink;
}
#v1
{
height:50px;
width:20px;
//border:1px solid;
position:relative;
bottom:30px;
right:20px;
border-radius:50px 50px 50px 50px;
//background-color:black;
}

#r2
{
height:250px;
width:22%;
border-radius:0px 50px 10px 50px ;
border:0px solid;
box-shadow:4px 4px 20px black;
float:left;
margin-left:31px;
background-color:lightpink;
}
#v2
{
height:50px;
width:22px;
//border:1px solid;
position:relative;
bottom:30px;
right:20px;
border-radius:50px 50px 50px 50px;
//background-color:black;
}
#r3
{
height:250px;
width:20%;
border-radius:0px 50px 10px 50px;
box-shadow:4px 4px 20px black;
float:left;
margin-left:31px;
background-color:lightpink;
}
#v3
{
height:50px;
width:20%px;
//border:1px solid;
position:relative;
bottom:30px;
right:20px;
border-radius:50px 50px 50px 50px;
//background-color:black;
}
#r4
{
height:250px;
width:20%;
border-radius:0px 50px 10px 50px;
box-shadow:4px 4px 20px black;
float:left;
margin-left:31px;
background-color:lightpink;
}
#v4
{
height:50px;
width:50px;
//border:1px solid;
position:relative;
bottom:30px;
right:20px;
border-radius:50px 50px 50px 50px;
//background-color:black;
}
#right2
{
height:250px;
width:77.6%;
//border:1px solid;
margin-top:50px;
float:right;
}
#r5
{
height:250px;
width:22%;
border-radius:0px 50px 10px 50px;
box-shadow:4px 4px 20px black;
float:left;
margin-left:31px;
background-color:lightpink;
}
#v5
{
height:50px;
width:50px;
//border:1px solid;
position:relative;
bottom:30px;
right:20px;
border-radius:50px 50px 50px 50px;
//background-color:black;
}
#r6
{
height:250px;
width:22%;
border-radius:0px 50px 10px 50px;
box-shadow:4px 4px 20px black;
float:left;
margin-left:31px;
background-color:lightpink;
}
#r7
{
height:250px;
width:22%;
border-radius:0px 50px 10px 50px;
box-shadow:4px 4px 20px black;
float:left;
margin-left:31px;
background-color:lightpink;
}
#v7
{
height:50px;
width:50px;
//border:1px solid;
position:relative;
bottom:30px;
right:20px;
border-radius:0px 50px 10px 50px;
//background-color:black;
}
#r8
{
height:250px;
width:200px;
border-radius:0px 50px 10px 50px;
box-shadow:4px 4px 20px black;
float:left;
margin-left:31px;
background-color:lightpink;
}

</style>
</head>
<body>
<div id="outer">
<div id="left">
<div id="admin">
<center><img src="images/admin.png" height="100px" width="100px"></center>
</div>
<div id="admin1">
<center><h2>Welcome To Admin</h2></center>
</div>
<ul>
<li><a href="home">Home</li></a> 
<hr/>
<li><a href="vad.php">VIEW ALL DOCTORS</li></a>
<hr/>
<li><a href="vap.php">VIEW ALL PATIENTS</li></a>
</hr>
<li><a href="vac.php">VIEW ALL CONTACTS</li></a>
<hr/>
<li><a href="vdb.php">VIEW DISCUSSION BOARD</li></a> 
<hr/>
<li><a href="vaf.php">VIEW ALL FEEDBACK</li></a> 
<hr/>
<li><a href="vap.php">VIEW ALL APPOINTMENT</li></a> 
<hr/>
<li><a href="change.php">CHANGE PASSWORD</li></a> 
<hr/>
<li><a href="logout.php">LOGOUT</li></a>
<hr/>
</ul>
 </div>

<div id="right"> </div>

	<div id="right1">
	<div id="r1">
	<div id="v1"></div>
	</br></br></br></br>
	<center><h2><a href="vad.php">View all doctors</h2></a></center>
	</div>
	
	<div id="r2">
	<div id="v2"></div>
	</br></br></br></br>
	<center><h2><a href="vap.php">View all patients</h2></a></center></div>
	
	<div id="r3">
	<div id="v3"></div>
	</br></br></br></br>
	<center><h2><a href="vac.php">View all contacts</h2></a></center></div>
	
	<div id="r4">
	<div id="v4"></div>
	</br></br></br></br>
	<a href="vdb.php"><h2>View discussion board<h2></a>
	</div>
	             </div>
	 <div id="right2">
	 <div id="r5">
	 <div id="v5"></div>
	 	</br>
	 <center><h2><a href="vaf.php">View all feedback</h2></a></center>
	 </div>
	<div id="r6">
	</br></br></br></br>
	<center><h2><a href="vap.php">View all appointment</h2></a></center>
	</div>
	<div id="r7">
	<div id="v7"></div>
	</br>
	<center><h2><a href="change.php">Change password</h2></a>
	</center>
	</div>
	<div id="r8">
	</br></br></br></br>
	<center><h2><a href="logout.php">Logout</h2></a>
	</div>
	 </div>   
	
</div>
</body>
</html>