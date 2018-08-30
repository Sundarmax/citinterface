<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>IT INTERFACE 2K16</title>
        
		<link rel="stylesheet" href="style16.css">
        
		<!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="tech/bootstrap.min.css" type="text/css">
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="css/button.css" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="tech/animate.min.css" type="text/css">

		<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="tech/style13.css">



    <!-- Custom CSS -->
    <link rel="stylesheet" href="tech/creative.css" type="text/css">
    <link href="cs/loaders.css" type="text/css" rel="stylesheet">

	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">

	<link href="tech/swipenavigation.css" rel="stylesheet" type="text/css">
  
  </head>
  

	<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
      <title>IT INTERFACE'16 </title>
  </head>
  <body>
   <div class="main-nav">
      <div class="contain">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="images/logo.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="http://www.citinterface.in/index.html#home">Home</a></li>
            <li class="scroll"><a href="http://www.citinterface.in/index.html#services">Events</a></li> 
            <li class="scroll"><a href="http://www.citinterface.in/index.html#team">Team</a></li>
            <li class="scroll"><a href="http://www.citinterface.in/index.html#contact">Contact</a></li>	
	
  <div class="dropdown">
  <button class="dropbtn"><b>UNIQ</b></button>
  <div class="dropdown-content">
   <a href="http://www.internshipinchennai.com/"  class="menufont">INTERNSHIP</a>
    <a href="http://www.ieeefinalyearprojects.org/" class="menufont">IEEE PROJECTS</a>
    <a href="http://www.androidtraininginchennai.com/" class="menufont">ANDROID TRAINING</a>
	<a href="http://www.inplanttraining.org/" class="menufont">IPT</a>
  </div>
</div>

  			
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
    

    <div class="formbox">    
    
      <h1 class="title">Workshop Registration</h1>
    
    <form method="POST" action="reg_iot.php" enctype="multipart/form-data">
		

		<ul>
        <li>
          
          <label for="name">Name:&nbsp;&nbsp;&nbsp;&nbsp;</label>
          
          <input  type="text" id="name" name="name" onblur="if(this.value=='')th
          is.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';">
        
        </li>
        
        <li>
          <label for="email">Email:&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="email" name="email" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';">
        </li>
      
        <li>
          <label for="mobile">Mobile:&nbsp;&nbsp;</label>
          <input type="text" name="mobile" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';">
        </li>
        <li>
          <label for="college">College:</label>
          <input type="text" name="college" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';"> </li>
        
        <li>
          <label for="dept">Dept:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="text" name="dept" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';">
        </li>
        
        <li>
         <label for="year">Year:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="text" name="year" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';">
        </li>        
        
        <li>
        
        <label for="year">Workshop</label><br>
  			<input type="radio" name="gender" value="Android"  readonly="readonly" checked> Internet Of Things<br>
        </li>
        <li>
        
        <label for="year">Date</label><br>
      	<input type="date" name="bday" max="1979-12-31" value="2016-09-30" readonly="readonly"><br>
        </li>
        
        </br>
        <li>
        
        		<button type="submit" name="submit" class="ready"> Register </button>
        </li>
         
    </ul>

</div>

</form>




<b><div id="footere" align="center"> &copy; copyright Interface 2016</div></b>
<script src="tech/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="tech/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="tech/jquery.easing.min.js"></script>
    <script src="tech/jquery.fittext.js"></script>
    <script src="tech/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="tech/creative.js"></script>
    <script src="tech/script.js"></script>
  </body>
  

  </body>
   
</html>




<?php



//mysql_connect("localhost","","");
    //mysql_select_db("test");


mysql_connect("localhost","citinter_user","user11");
    mysql_select_db("citinter_workshop_db");
  
 
	
 
  if(isset($_POST['submit'])) 




{
	$name = $_POST['name'];
   	$mobile = $_POST['mobile'];
   	$email = $_POST['email'];
   	$college = $_POST['college'];
	$year=$_POST['year'];
	$dept=$_POST['dept'];

	
	

                                      //RANDOM ID GENERATION
		
//set the random id length 
$random_id_length = 6; 

//generate a random id encrypt it and store it in $rnd_id 
$rnd_id = crypt(uniqid(rand(),1)); 

//to remove any slashes that might have come 
$rnd_id = strip_tags(stripslashes($rnd_id)); 

//Removing any . or / and reversing the string 
$rnd_id = str_replace(".","",$rnd_id); 
$rnd_id = strrev(str_replace("/","",$rnd_id)); 

//finally I take the first 10 characters from the $rnd_id 
$rnd_id = substr($rnd_id,0,$random_id_length); 
				




          if($name ==''){
	  
	  echo "<script>alert('Please enter your First name')</script>";
	  
	  exit();
	  
	  }
	   if($mobile ==''){
	  
	  echo "<script>alert('Please enter your contact number')</script>";
	  
	  exit();
	  }
	   if($email ==''){
	  
	  echo "<script>alert('Please enter your Email')</script>";
	  
	  exit();
	  }
	  
	   if($college ==''){
	  
	  echo "<script>alert('Please enter your college name')</script>";
	  
	  exit();
	  }
		
	   if($dept ==''){
	  
	  echo "<script>alert('Please enter your department')</script>";
	  
	  exit();
	  }
		
	   if($year ==''){
	  
	  echo "<script>alert('Please enter your year of study')</script>";
	  
	  exit();
	  
	  }
                          












	   


//mail configuration


		
$body = "<html>
<head>

<style>
#content{
border: 1px sold black;
}
</style>
</head>
<body>

<div id='content'>

<h1>Hi, Warm Greetings from Interface Team,</h1>

<p>This is to Confirm that you are selected to participate in the Internet Of Things  Workshop on September 30, 2016</p>
While attending the workshop, please do take a printout of this email and make sure to get a seal  at registration desk.<br>

<ul>
<li>Your Participation Id is : $rnd_id</li>
<li>Your Name  : $name  </li>
<li>Your Email : $email </li>
<li>Your Mobile_no : $mobile  </li>

<li>Be at Coimbatore Institute of Technology by 09.00 AM sharp</li>
<li>Do bring Your laptop and power adapter, you can also share with your Friends</li>
<li>The Workshop begins sharply at 09.30 AM at IT206 (Seminar Hall)</li>
</ul>

For Further Details,<br>
Sundar Rajan - 9500490424<br>
Harish Kanna - 9994064614<br><br><br>

With Regards,<br>
Interface'16 Team.<br><br>
<span stle='font-size:1px'>
PS : Can't Wait to have you guys here!!!!!!</span>
</div>

<br><br>
Website : http://citinterface.in<br>
Facebook : http://facebook.com/citinterface<br>
</body>
</html>
";


$headers='MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html;charset=iso-8859-1' . "\r\n";
$headers .= 'From: Organisers <interface2k16@citinterface.in' . "\r\n";
$to = $email;
$subject = "Interface 16 - Workshops - Reg.,";
//mail function












			
	$query = mysql_query("SELECT mobile,email FROM iot WHERE  email='$email'");

  if (mysql_num_rows($query) != 0)
  {
	        
	  echo "<script type='text/javascript'>alert(\"You have already Registered\")</script>";
  }


 
  else
  {

			$mail = mail($to, $subject, $body, $headers);
			
			$query="insert into iot(interid,name,college,year,dept,email,mobile)
                   				
					values ('$rnd_id','$name','$college','$year','$dept','$email','$mobile')";
		
  
  			if(mysql_query($query))


							{							  
		  


                                                                  echo "<script type='text/javascript'>alert('CLICK OK TO PROCEED');
window.location='redirect.php';
</script>";
                                          
		 						//header("Location:https://www.citinterface.in/redirect.php");
								
		   
		   					}
	 
	 
	 }




























}












?>


