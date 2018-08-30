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
	

  			
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
    

    <div class="formbox">    
    
      
	<h1 class="title">Event Registration</h1>
    
    <form method="POST" action="event_reg.php" enctype="multipart/form-data">
		

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
          <label for="branch">Dept:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="text" name="branch" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';">
        </li>
        
        <li>
         <label for="year">Year:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="text" name="year" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';">
        </li>
        
        
        <li>
          <label for="language">Technical Events</label></br>
          <input type="checkbox" name="techno[]" value="Code_wizard"/>Code Wizard</br>
          <input type="checkbox" name="techno[]" value="break_the_enigma"/>Break the Enigma</br>
          <input type="checkbox" name="techno[]" value="Eraser"/>Eraser</br>
          <input type="checkbox" name="techno[]" value="Hack_to_harvest"/>Hack to Harvest </br>
          <input type="checkbox" name="techno[]" value="ppt"/>Paper presentation</br>
        </li>
        
         <li>
          <label for="language">Non Technical Events</label></br>
          <input type="checkbox" name="ntechno[]" value="Magizchi"/>Magizhci</br>
          <input type="checkbox" name="ntechno[]" value="Pixelate"/>Pixelate</br>
          <input type="checkbox" name="ntechno[]" value="Million_dollar"/>Million Dollar</br>
          <input type="checkbox" name="ntechno[]" value="Shipwreck"/>Shipwreck <br>
         
        </li>
        
         <li>
          <label for="language">Gaming Events</label></br>
          <input type="checkbox" name="game[]" value="Mini_militia"/>Mini Militia</br>
          <input type="checkbox" name="game[]" value="fifa'15"/>Fifa'15</br>
          <input type="checkbox" name="game[]" value="Creep_n_conquer"/>Creep N Conquer</br>
        </li>
        
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
  
   
</html>








<?php

if(isset($_POST['submit'])) 
	{
	

       mysql_connect("localhost","citinter_user","user11");
       mysql_select_db("citinter_workshop_db");

	//mysql_connect("localhost","root","");
    //mysql_select_db("test");
 
	// FORM PROCESSING 	
	
	$name = $_POST['name'];

   	$mobile = $_POST['mobile'];
   	
	$email = $_POST['email'];
   	
	$college = $_POST['college'];
  	
	$branch= $_POST['branch']; 
	
	$year = $_POST['year']; 
	
	
	//FORM VALIDATION
	
	if($name ==''){
	  
	  echo "<script>alert('Please enter your First name')</script>";
	  
	  exit();
	  
	  }
	  
	 if($mobile ==''){
	  
	  echo "<script>alert('Please enter your Contact number')</script>";
	  
	  exit();
	  
	  }
	  
	  if($email ==''){
	  
	  echo "<script>alert('Please enter your Email Address')</script>";
	  
	  exit();
	  
	  }
	  
	   if($college ==''){
	  
	  echo "<script>alert('Please enter your college name')</script>";
	  
	  exit();
	  }
	  
	  	if($branch ==''){
	  
	  echo "<script>alert('Please enter your branch')</script>";
	  
	  exit();
	  
	  }
	  	
		
		
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
				


	
			



//$checkbox3=$_POST['game'];

//$checkbox4=$_POST['ntechno'];

		if(empty($_POST['techno'])) 
		
		{
		
	//Loop to store and display values of individual checked checkbox
		//foreach($_POST['check_list'] as $selected)
	
			$chk='no_events';
		
		}

		if(!empty($_POST['techno'])) 
		
		{
				
			$checkbox1=$_POST['techno'];
			
			
			$chk="";  

			foreach($checkbox1 as $chk1)  
   			{  
      		$chk .= $chk1.",";  
   			}  
 
	
		//Loop to store and display values of individual checked checkbox
		//foreach($_POST['check_list'] as $selected)
	
				
		}
		
		
		
		if(empty($_POST['game'])) 
		
		{
		
	//Loop to store and display values of individual checked checkbox
		//foreach($_POST['check_list'] as $selected)
	
			$ch3='no_events';
		
		}
		
		
		
		if(!empty($_POST['game'])) 
		
		{
				
			$checkbox3=$_POST['game'];
				
			$ch3="";

		foreach($checkbox3 as $chk13)  
   		{  
     	 	$ch3 .= $chk13.",";  
   		}  
				
		}
		

		
		if(empty($_POST['ntechno'])) 
		
		{
		
	//Loop to store and display values of individual checked checkbox
		//foreach($_POST['check_list'] as $selected)
	
			$chk4='no_events';
		
		}
		
		if(!empty($_POST['ntechno'])) 
		
		{
				
			$checkbox4=$_POST['ntechno'];
				
			
		$chk4="";  
		foreach($checkbox4 as $chk1)  
   		{  
      	$chk4 .= $chk1.",";  
   		}  			
				
		}
		
		//MAIL CONFIGURATION
	

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
<p>
We look forward to your participation in our technical Symposium “INTERFACE’16” to be held on  SEP-30th and OCT-01.<br>
 This is a confirmation letter to ensure you that we have got your mail and are ready to receive you!<br> 
 Our on the spot registration will start at 9 am on 30th September 2016 and is mandatory for all participants regardless whether you have already done our online registration or not
</p>

<p>While participating events of interface'16, please do take a printout of this email and make sure to get a seal  at registration desk.<br>
					</p>
<ul>

<li>Your Participation Id is IT : $rnd_id</li>

<li> The details are provided by you </li></br>

<li>Your Name  : $name  </li>
<li>Your Email : $email </li>
<li>Your Mobile_no : $mobile  </li>
<li>Tech Events : $chk </li>
<li>Non_Tech Events : $chk4<li>
<li>Game Events : $ch3</li>

<li>


</ul>

For Further Details,<br>
Sabarivasan -8344883724<br>
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

$to =$email;

$subject = "Interface 16 - Events - Reg.,";

/*


//mail function	

 $query = mysql_query($con,"SELECT mobile,email FROM events WHERE  email='$email' or mobile='$mobile'");

  if (mysql_num_rows($query) != 0)
  {
	  
	  echo "<script type='text/javascript'>alert(\"You have already Registered\")</script>";
	  exit();
  }


else
	{          

	$mail = mail($to, $subject, $body, $headers);
	$in_ch=mysqli_query($con,"insert into events(inter_id,name,email,college,branch,year,mobile,technical,game,nontech)
                   				
					values ('$rnd_id','$name','$email','$college','$branch','$year','$mobile','$chk','$ch3','$chk4')");
					
		 echo "<script type='text/javascript'>alert('CLICK OK TO PROCEED');
                 window.location='redirect.php';

                 </script>";
	}

*/




                   				
 $query = mysql_query("SELECT mobile,email FROM events WHERE mobile='$mobile' or email='$email'");

  if (mysql_num_rows($query) != 0)
  {
	        
	  echo "<script type='text/javascript'>alert(\"You have already Registered\")</script>";
  }






else
	{  

	
	$mail = mail($to, $subject, $body, $headers);

		$query="insert into events(inter_id,name,email,college,branch,year,mobile,technical,game,nontech)
                   				
				values ('$rnd_id','$name','$email','$college','$branch','$year','$mobile','$chk','$ch3','$chk4')";


		
  
  		if(mysql_query($query))

							{							  
		  
                                                                                   echo "<script type='text/javascript'>alert('CLICK OK TO PROCEED');
window.location='redirect.php';
</script>";
                                  
		 				//header("Location:
								
		   
		   					}



        }		
		
}
?>




















