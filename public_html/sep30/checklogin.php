<?php
include('conn.php');//para sa connection sang database



if (isset($_POST['submit'])) 

{

$UserName=$_POST['username'];

$Password=$_POST['password'];

$result=mysql_query("select * from members where UserName='$UserName' and Password='$Password'")or die (mysql_error());
		
$count=mysql_num_rows($result);

$row=mysql_fetch_array($result);//ma return row sa database
		
		if ($count > 0)
	{	
	session_start();		

	$_SESSION['member_id']=$row['member_id'];//kwaon ang id sang may tyakto nga username kag password ang ibotang sa $_SESSION['member_id']
		header('location:welcome.php');
	}

		else{
		header('location:index.php');
		}

}

?>

