<?php
include ('includes/connection.php');
if(isset($_POST['delete']))
{
	$s_id=htmlentities(mysqli_real_escape_string($con,$_POST['s_id']));
	$check_students="select * from student where S_id='$s_id'";
	$run_s=mysqli_query($con,$check_students);
	$check=mysqli_num_rows($run_s);
	if($check==0)
	{
		echo "<script>alert('Sudent does not exist')</script>";
		echo "<script>window.open('delete_student.php','_self')</script>";
		exit();
	}
	$query=mysqli_query($con,"delete from student where S_id='$s_id'");
	if($query)
	{
		echo "<script>alert('deleted')</script>";
		echo "<script>window.open('index1.php','_self')</script>";
	}
	else
	{
		echo "<script>alert('failed')</script>";
		echo "<script>window.open('delete_student.php','_self')</script>";
	}
}