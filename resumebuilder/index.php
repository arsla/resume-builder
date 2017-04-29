<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src='https://code.responsivevoice.org/responsivevoice.js'></script>
	<link rel="shortcut icon" href="icon.ico" type="image/x-icon" />

</head>
<body>

<img src="logo1.png" width="150px">
<a href="home.php"><button onclick='responsiveVoice.speak("Welcome to CV builder");' class="grow_skew_forward" style="margin-left: 27%;margin-top: 0%;" value="'🔊 Play'">Create Resume &rarr;</button></a>
<p style="color:white;font-size:24px;margin-left:28%;">Create beautiful, professional resumes in minutes, <strong>free.</strong><p>
<frame>
	<?php require 'jsbutton.php';?>
	</frame>
	
	



</body>
</html>