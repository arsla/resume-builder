<?php
$error='';
$feedback='';
$to='arslawar31@gmail.com';
$name='';
$email='';
$message='';
if(isset($_POST['name']))
$name= $_POST['name'];
if(isset($_POST['email']))
$email= $_POST['email'];
if(isset($_POST['message']))
$message= $_POST['message'];

$header='From'. $email. '-' . $name;
$message_fs=<<<EMAIL
INFO OF SENDER:
Name:$name;
Email:$email;
-----------
MESSAGE:
$message
EMAIL;

/*automatic response*/
$subject2='Thank you for your feedback';
$header2="From:".$to;
$message2=<<<EMAIL
INFO OF SENDER:
Email:$to
---------------
MESSAGE:
Thank you for sending your feedback!
---------------
NOTE:
Do not reply to this email.
EMAIL;



if($_POST){
  if($name=='' || $email=='' || $message=''){
  $error='please fill all fields';}
else
{
  mail($to,$message_fs,$header);
  mail($email,$subject2,$message2,$header2);
$feedback='Feedback sent';}
}

?>


<!DOCTYPE HTML>
 <html>
 <HEAD>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src='https://code.responsivevoice.org/responsivevoice.js'></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="shortcut icon" href="icon.ico" type="image/x-icon" />
  <title>resume maker</title>
</head>
 </HEAD>
 <BODY>
<header style="background-color:#ff4d4d"><img src="logo1.png" width="100px" height="80px">
<a href="home.php" class="btn btn-default btn-lg" role="button" style="margin-left:80%">HOME</a></header>
<div class="container">
  <div class="row">
    <div class="col-lg-offset-3 col-xs-12 col-lg-6">
      <div>
    
        <div class="row text-center">

        
          <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12"> </div>
          <div class="text-center col-lg-12"> 
          <p style="color:red;"><?php echo $feedback;?></p>
            <!-- CONTACT FORM https://github.com/jonmbake/bootstrap3-contact-form -->
            <form role="form" id;="feedbackForm" method="post" action="" class="text-center">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                <span class="help-block" style="display: none;">Please enter your name.</span></div>
              <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                <span class="help-block" style="display: none;">Please enter a valid e-mail address.</span></div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea rows="10" cols="100" class="form-control" id="message" name="message" placeholder="Message"></textarea>
                <span class="help-block" style="display: none;">Please enter a message.</span></div>
              <span class="help-block" style="display: none;">Please enter a the security code.</span>
              <button onclick='responsiveVoice.speak("Thank you!");' type="submit" class="grow_skew_forward">&nbsp;&nbsp;&nbsp;  Send &nbsp;&nbsp;&nbsp;  </button>
            </form>
            <p style="color: red;"><?php echo $error;?></p>
            <!-- END CONTACT FORM --> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer style="background-color:#ff4d4d;">
<p style="margin-left:40%; ">Copyright 2017-2018.All Rights Reserved</p>
<p style="margin-left:43%; ">Powered by &nbsp;<a href="index.php" style="color:black;">cvgenerator.com</a></p></footer>
</BODY>
</html>