<?php
$con= mysqli_connect("localhost","root","","intellify");
	if($con==FALSE)
		echo "No connection";
if(isset($_POST['sign_up']))
{
	$name=htmlentities(mysqli_real_escape_string($con,$_POST['Name']));
	$contact=htmlentities(mysqli_real_escape_string($con,$_POST['Contact']));
	$t_email=htmlentities(mysqli_real_escape_string($con,$_POST['t_email']));
	$check_email="select * from teacher where Email='t_email'";
	$run_email=mysqli_query($con,$check_email);
	$check=mysqli_num_rows($run_email);
	if($check==1)
	{
	echo "<script>alert('email exists')</script>";
	echo "<script>window.open('TeacherSignUp.php','_self')</script>";
	exit();
	}
	$school=htmlentities(mysqli_real_escape_string($con,$_POST['School']));
	$ins="insert into teacher (Name,Contact,Email,School) values ('$name','$contact','$t_email','$school')";
	$query=mysqli_query($con,$ins);
	if($query)
	{
		echo "<script>alert('account created')</script>";
		echo "<script>window.open('T_signin.php','_self')</script>";
	}
	else
	{
		//echo "error".mysqli_error($con);
		echo "<script>alert('Failed')</script>";
		echo "<script>window.open('T_SignUp.php','_self')</script>";
	}
}
?>