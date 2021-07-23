<?php

session_start();

$link = mysqli_connect("localhost", "root", "", "blog");



if(isset($_POST['signin']))
{
	$uname =$_POST['uname'];
	
	$pass=$_POST['pass'];
	
	$s="select * from user where uname = '$uname' && pass ='$pass'";
		
	$r= mysqli_query($link,$s);
	$num=mysqli_num_rows($r);
	
	if($num==1)
	{
		header('location:admin.php');
	}
	else
	{
		echo "faild";
	}
	
	
	
}
	

?>
