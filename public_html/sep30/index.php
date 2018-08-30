<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Interface'16 IT</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body id="login-bg">
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login" style="width:850px">
    
<img src="logo.png" width="" height="140" style="margin-bottom:px;margin-left:-350px;margin-top:-290px;">
<H6 style="margin-top:-138px;margin-left:-190px;font-size:15px;color:#FFFFF0;display: block;"></h6>
<H6 style="margin-top:-15px;margin-left:400px;font-size:15px;color:#FFFFF0;" ></h6>
<H6 style="margin-top:30px;margin-left:-175px;font-size:35px;color:#FFFFF0;">COIMBATORE INSTITUTE OF TECHNOLOGY</b></h6>
	</div>
	<!-- end logo -->
	

  <form action="checklogin.php" method="post" class="login-inp">

	<div class="clear"></div>
	<br>
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<div id="login-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Username</th>
			<td>

<input type="text" name="username" maxlength="20" class="login-inp" /></td>
		</tr>
		<tr>
			<th>Password</th>
			<td>

<input type="password" name="password" maxlength="20"  class="login-inp" /></td>
		</tr>
				<tr>
			<th></th>
			<td valign="top"><br><br></td>
		</tr>
		<tr>
			<th></th>
			<td>


<input type="submit"  name="submit"  value="login" class="submit-login"  /></td>
		
</tr>
		</table>
	</div>
    </form>
    
 	<!--  end login-inner -->
    
	
 <!--  end loginbox -->
 
 
	<!--  start forgotbox ................................................................................... -->
	<!--  end forgotbox -->
</div>
</body>
</html 