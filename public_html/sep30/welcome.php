<?php
include('conn.php');

session_start();

if (!isset($_SESSION['member_id']))


{

header('location:index.php');


}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Interface'16- IT</title>

<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
 
<!--  checkbox styling script -->


<![if !IE 7]>


<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>
	
<style type="text/css">

td {
	text-align:center;
	padding:10px;
}


h2 {
	color:red;
	text-align:center;
}

label {
	font-size:13px;
	color: blue;
    font-weight: bold;
    font-family: cursive;
}

table {
	margin:auto;
	}

th {
	color:red;
	font-size:20px;
    	font-family: cursive;
}
</style>


</head>
 



















<body>
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

	<!-- start logo -->
	<div id="logo">
	</div><div>

<img src="logo.png" width="" height="115" style="margin-bottom:px;margin-left:px;margin-top:22px;">
<H6 style="margin-top:-138px;margin-left:190px;font-size:15px;color:#F8F8FF;display: block;"></h6>
<H6 style="margin-top:-138px;margin-left:190px;font-size:15px;color:#F8F8FF;display: block;"></h6>
<H6 style="margin-top:-138px;margin-left:190px;font-size:15px;color:#F8F8FF;display: block;"></h6>


<H6 style="margin-top:30px;margin-left:175px;font-size:34px;color:blue;">COIMBATORE INSTITUTE OF TECHNOLOGY</b></h6>
	
	</font>
	<!-- end logo -->
	
	<!--  start top-search -->
    	<div id="top-search">
		
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td><b><font style="font-family: Arial, Helvetica, sans-serif;" color="#F8F8FF"><img src="" style="margin-top:-50px;" height="60" width="70"></td>
		<td>
		</td>
		</tr>
		</table>
	</div>
 	<!--  end top-search -->
 	<div class="clear"></div>

</div>
<!-- End: page-top -->

</div>
	
<div class="clear">&nbsp;</div>
 
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">
        	
            <div class="nav-divider">&nbsp;</div>
			
            <a href="logout.php" id="logout"><img src="images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
			<!--  start account-content -->	
			<!--  end account-content -->
		
		</div>
		<!-- end nav-right -->

		<br />
        <br/>
		
		
        <!--  start nav -->
		
        
        <div class="nav">
		<div class="table">
		
        <ul class="current" ><li><a href="welcome.php"><b>Home</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="http://www.citinterface.in" target="_blank" ><b>Access</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

 <div class="clear"></div>
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="toplef"></th>
		<td id="tbl-border-t">&nbsp;</td>
		<th class="toprigh"></th>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-le"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
			
				
				
		
		 
				<!--  start product-table ..................................................................................... -->
				<form id="mainform" action="">
				
				
					<center>
<table bgcolor="white" width="485" height="420" style="margin-top=px;">
<tr>			
<td><font color="#8E6BDE"><marquee direction="left" align="center"  scrollamount="4"
            
            scrolldelay="15"><h1 style="font-size: 30px;"><i>GUYS !! DON'T SHARE THE REGISTRATION DETAILS WITH ANYBODY !! YOU MUST LOGOUT AFTER COMPLETE YOUR WORK  </marquee></font></h1></i></td>
</tr>
<tr>
<td align="center"><img src="image/Admin1.png" style="margin-left:10px;" width="410" height="350"></td>
</tr>
</table>
</center>
				
				</table>
				<!--  end product-table................................... --> 
				</form>

</br>
</br>


 <table border="1" cellspacing="5" cellpadding="5" width="100%">
	<thead>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>COLLEGE</th>
			<th>MOBILE</th>
			<th>EMAIL</th>
			<th>TECHNICAL</th>
			<th>NON_TECHNICAL</th>
			<th>GAME</th>
		</tr>
	</thead>
	<tbody>
	<?php
		require_once('connection.php');
		$result = $conn->prepare("SELECT * FROM events ORDER BY id ASC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<tr>
			<td><label><?php echo $row['id']; ?></label></td>
			<td><label><?php echo $row['name']; ?></label></td>
			<td><label><?php echo $row['college']; ?></label></td>
			<td><label><?php echo $row['mobile']; ?></label></td>
			<td><label><?php echo $row['email']; ?></label></td>
			<td><label><?php echo $row['technical']; ?></label></td>
			<td><label><?php echo $row['nontech']; ?></label></td>
			<td><label><?php echo $row['game']; ?></label></td>
		</tr>
		<?php } ?>
	</tbody>
</table>






















			</div>
			<!--  end content-table  -->
		
			<!--  start actions-box ............................................... -->
			
			<div class="clear"></div>
		 
		</div>
			<div class="clear">&nbsp;</div>

</div>
</div>

</body>
</html>