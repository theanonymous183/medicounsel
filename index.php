<?php

?>
<html>
<head>
<style>
body
{
margin:0px;
padding:0px;
}
#center
{
position:absolute;
top:50%;
transform: translateY(-50%);
width:100%;
}
h1
{
margin:0px;
padding:0px;
text-align:center;
font-size:10em;
color:transparent;
background-image: linear-gradient(to right , #f00,#ff0,#00f,#0f0,#00f);
//background-image:linear-gradient(to right ,#f00,#ffo,#0ff,#0f0,#00f);
-webkit-background-clip: text;
animation: animate 20s linear infinite;
background-size: 1000%;
}
@keyframes animate
{
	0%
	{
		background-position: 0% 100%;
	}

	50%
	{
		background-position: 100% 0%;
	}

	100%
	{
		background-position: 0% 100%;
	}
}
</style>
<script>
function wel()
{
	
	window.location.href='home.php';
	window.setTimeout("wel()",14000);
}
</script>
</head>
<body>
<div id="center">
<h1 onclick="wel()">WELCOME TO MEDICOUNSEL </br></h1> 
</div>
</body>
</html>