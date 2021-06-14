<?php
include ('includes/connection.php');
if(isset($_POST['login']))
{
	$Email=htmlentities(mysqli_real_escape_string($con,$_POST['email']));
	$id=htmlentities(mysqli_real_escape_string($con,$_POST['T_id']));
	$check_email="select * from teacher where Email='$Email' and T_id='$id'";
	$run_email=mysqli_query($con,$check_email);
	$check=mysqli_num_rows($run_email);
	if($check==1)
	{
		echo "<script>window.open('index1.php','_self')</script>";
	}
	else
	{
		echo "<script>alert('Email and Mismacth  (or) Email or Id does not exist')</script>";
	}
}