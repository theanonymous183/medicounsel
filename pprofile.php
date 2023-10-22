<?php
session_start();
//echo "welcome user";
echo "<br/>";
//echo $_SESSION['patient'];
if($_SESSION['patient']=="")
{
	session_destroy();
	header("Location:login.php?msg=3");
}
?>
<html>
<head>
          <link rel="stylesheet" type="text/css" href="css/pprofile.css">
</head>
<body>
          <div id="outer">
	<!--Menu start here--->
		  <div id="menu">
		  <center><ul>
		            <li><a href="Index.php">Home</a></li>
		           <li><a href="pbook.php">BookAppointement</a></li>
		           <li><a href="papp.php">My Appointement</a></li>
		           <li><a href="pdiscuss.php">Discussion Board</a></li>
		           <li><a href="pupdate.php">UpdateProfile</a></li>
		           <li><a href="pchange.php">ChangePassword</a></li>
		           <li><a href="pfeed.php">Feedback</a></li>
		           <li><a href="plogout.php">Logout</a></li>
		  </ul></center>
		  </div>
	<!--Menu closed here-->
	              <div id="header">
				  <div id="one"><br/>
				 <center> <a href="#" style="color:white">PATIENT INFORMATION GUIDE</a></center>
				  </div>
				  <div id="two">
				  <center><a href="#"style="color:black">WHAT IS ABDOMINAL HYSTERECTOMY?</a></center></div>
				  <div id="three"><br/>
				  <center><a href="#"style="color:black">HOW I PREAPER FOR ABDOMINAL HYSTERECTOMY?</a></center></div>
				  <div id="four"><br/>
				  <center><a href="#"style="color:black">WHAT IS THE HAPPENS AFTER THE PROCEDURE?</a></center></div>
				  <div id="five"><br/>
				  <center><a href="#"style="color:black">WHAT CAN I EXPECT AFTER ABDOMINAL HYSTERECTOMY?</a></center></div>
				  <div id="six"><br/>
				  <center><a href="#"style="color:black">WHAT ARE THE RISK ASSOCIATED WITH THIS PROCEDURE?</a></center></div>
				  <div id="seven"><br/>
				  <center><a href="#"style="color:black">GET IN TOUCH</a></center></div>
				  </div>
				  <div id="about">
				  <div id="a">
				  <h4> Improving the quality of care:--</h4>
				  <p>The board of the Northbank Hospitals trust discussed 
				  in 2010 and 2011 an initiative to improve access to the hospitals
				  for outpatients. The initiative was the result of complaints and 
				  informal discussion with patients (rather than surveys or questionnaires) about</p>
				  <h4>Linked ArticlesRequest Permissions:--</h4>
                  <p> Boards of directors of hospitals in the National Health Service (NHS) in England 
				  have three key roles: formulating strategy; ensuring accountability; and shaping a healthy 
				  culture.1 In undertaking these roles, boards make decisions about annual plans and budgets 
				  that impact directly on the quality of care. The Department of Health expects boards of 
				  directors of NHS </p>
				  <h4>Developing strategy:--</h4>
				  <p> Following the Mid Staffordshire hospitals crisis in the mid-2000s and Department 
				  of Health guidance in 2010, the boards of directors at Northbank and Hillside Hospitals 
				  took different </p>

				  </div>
				  <div id="b">
				  <img src="Images\vin7.jpg"height="416px" width="510px"></img>
				  </div>
				  </div>
				  </div>
				  </div>
	<!--Footer start here-->  
		  <div id="last">
		<div id="last1">
		               <center><p style="color:white">Copyright &copy; SOFTPRO INDIA PVT LT.<br/>Copyright &trade; SOFTPRO INDIA PVT LT</p></center>
		</div>
		<div id="last2">
		               <center><P style="color:white"> Devloped And Designed By CSK LOVER<br/>Mobile No:7390936983</p></center>
					   
		</div>
	<!--Footer closed here-->
</body>
</html>