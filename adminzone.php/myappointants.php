<?php
?>
<html>
<head>
<style>
#outer
{
height:1000px;
width:1300px;
border:1px solid;
background-color:white; 
opacity:0.1px;
}
#top
{
height:200px;
width:1300px;
border:1px solid;
}
#topl
{
height:200px;
width:300px;
border:1px solid;
float:left;
}
#topu
{
height:50px;
width:800px;
border:1px solid;
float:left;
}
#topr
{
height:50px;
width:194px;
border:1px solid;
float:left;
}

#menu ul{
	list-style:none;
	margin-left:8px;
	
}
#menu
{
height:60px;
width:1300px;
background-color:khaki;
border-top:1px solid;
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
#slider
{

height:350px;
width:1300px;
border:1px solid;
//margin:50px auto;
float:left;
}
#bottom
{
height:200px;
width:1300px;
border:1px solid;
float:left
}
#footer
{
height:300px;
width:1300px;
border:1px solid;
background-color:darkturquoise;
float:left;
}
#fleft
{
	height:300px;
	width:550px;
	//border:1px solid;
	float:left;
}
#fright
{
	height:300px;
	width:746px;
	//border:1px solid;
	float:left;
}
#tum
{
	height:50px;
	width:746px;
	//border:1px solid;
	float:left;
}
#san
{
	height:60px;
	width:746px;
	//border:1px solid;
	float:left;
}
#san1
{
	height:60px;
	width:80px;
	border:1px solid;
	float:left;
}
#san2
{
	height:60px;
	width:600px;
	border:1px solid;
	float:left;
}
#time
{
	height:60px;
	width:746px;
	//border:1px solid red;
	float:left;
}
#time1
{
	height:60px;
	width:80px;
	//border:1px solid red;
	float:left;
}
#time2
{
	height:60px;
	width:660px;
	//border:1px solid;
	float:left;
}





#ambulene
{
	height:60px;
	width:746px;
	border:1px solid red;
	float:left;
}
#ambulene1
{
	height:60px;
	width:80px;
	border:1px solid red;
	float:left;
}
#ambulene2
{
	height:60px;
	width:660px;
	border:1px solid;
	float:left;
}





#vivek
{
	height:60px;
	width:746px;
	border:1px solid red;
	float:left;
}
#vivek1
{
	height:60px;
	width:80px;
	border:1px solid red;
	float:left;
}
#vivek2
{
	height:60px;
	width:660px;
	border:1px solid;
	float:left;
}
#san1
{
	margin-left:30px;
}
#san3
{
	margin-left:150px;
}
#mm
{
	height:800px;
	width:1300px;
	border:1px solid red;
}
#mn
{
	height:200px;
	width:1300px;
	//border:1px solid red;
	background-color:#2F4F4F;
}
#mno
{
	height:350px;
	width:1300px;
	border:1px solid red;
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
<script>
		var img=["madi2.jpg","csk.jpg","ab.jpg","doctor.jpg",];
		var img=["madi2.jpg","csk.jpg","ab.jpg","doctor.jpg",];                          
		var i=0;
		function slide()
		{
		//alert("hii")
		var div=document.getElementById("slider");
	     div.style.backgroundImage="url('images/"+img[i]+"')";
	      i++;
		if(img.length==i)
		{
	      i=0;
		}
		window.setTimeout("slide()",1000);
		}
		</script>

</head>
<body onload="slide()">
<div id="outer">
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
<div id="slider" ></div>
<div id="bottom" style="background-color:#504A4B;">
<h2 align="center"><font color="#6698FF">Welcome To Hospital</font></h2>
<p style="color:white" align="center">Seattle Mennonite Church is an Anabaptist Christion commuunity.As disciples of jesus,we believe</br></p>
<p style="color:white" align="center">faith and action are inseparable elements in each personal in our journy together as</br></p>
<p style ="color :white" align="center">a commuunity of believers,we have named several areas of giftedness and calling(i,e/., charisms).</br></p>
<p style ="color :white" align="center">These charisms are gifts that God has given us for the ministries that God has set before us:</br ></p>
</div>
<div id="footer">
<div id="fleft">
<img src="doctor.jpg" height="300px" width="550px"/>
</div>
<div id="fright">
        <div id ="tum"></div>
 <div id ="san">
 <div id="san3"><b>&dental facility</b></div>
 Am expreincal Dental surgeon provides </br>
Like Dental Extractions,rct Scaling/Cleaing,Fillings,Local curettage.
       <div id="san1"><img src="dhoni12.jpg" height="30" width="30"/></div>
	   
	   <div id ="san2"></div>
</div>
	   
<div id ="time">
	   <div id ="time1"></div>
	   <div id ="time2"></div>
</div>	   
	  
	  
<div id ="ambulene">
	   <div id ="ambulene1"></div>
	   <div id "ambulene2"></div>
</div>	   
	  	   
<div id ="vivek">
	   <div id ="vivek1"></div>
	   <div id ="vivek2">oawhiideifiwkio<br/>sjdvjsjdkj</div>
	   
</div>	   
	 	  
	 	  
</div>

</div>

</div>
<div id="mm">
<div id="mn"><p style="color:white" align="center"><b>Lorem ipsum dolor site amet conse ctetur adipisicing elit,sed do eiusmod tempor incididunt</b></br></p></center>
<p style="color:white" align="center"><b>ut labore et dolor magna aliqua.Ut ennim ad minim veniam,quis nostrud exercitation ul-</b></br></p></center>
<p style="color:white" align="center"><b>lamco laboris nisi ut aliquip es ea consequat.Duis aute irure.</b></br></p></center>
</div>
<div id="mno"></div>
<div id="mnop">
<div id="mnop1"><center><b>STAY CONNECTED</b></br>
JOIN OVER 10,350 PEPOLE</br>
WHO RECEIVE BIL-WEEKLY WEB MARKETING TIPS.

<input type="text" name="name" placeholder="Email-Address"></br></br>

</center></div>
<div id="mnop2"><center><b>COMMINTTED INDIA</b></br>
  The misson of Sibley Memorial Hospital is to</br>
provide quality health services and facilities for the</br>
   community,to promote  wellness,to relive</br>
suffering,and to restore health as swiftly, safely, and </br>
humanely as it can be  done, consistent with the best</br>
  service we can give at the highest value for all</br>
           concerned.  
  


</center></div>
<div id="mnop3"><center><b>QUICK CONTACT</b></br>
<input type="text" name="name" placeholder="enter your name"></br></br>
<input type="text" name="email" placeholder="enter your email"></br></br>
<input type="submit" value"="Register"/>

</div>

</div>


</div> 
</body>
</html>