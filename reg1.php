<?php

session_start();

$link = mysqli_connect("localhost", "root", "", "blog");

if(isset($_POST['signup']))
{
	$email =$_POST['email'];
	$uname =$_POST['uname'];
	
	$pass=$_POST['pass'];
	if($email=='')
	{
		echo "<script>alert('Please enter the name')</script>";
		exit();
	}
	
	
	if($uname=='')
	{
		echo "<script>alert('Please enter the email')</script>";
		exit();
	}
	if($pass=='')
	{
		echo "<script>alert('Please enter the password')</script>";
		exit();
	}
	else{
	$q ="insert into user (email,uname,pass) values ('$email','$uname','$pass')";
	$r= mysqli_query($link,$q);
	if($r)
	{
		header('location:admin.php');
	}
	}
	
	
	
}
	

?>
