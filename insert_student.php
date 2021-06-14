<?php
$con= mysqli_connect("localhost","root","","intellify");
	if($con==FALSE)
		echo "No connection";
if(isset($_POST['s_sign_up']))
{
	$t_id=htmlentities(mysqli_real_escape_string($con,$_POST['t_id']));
	$check_teachers="select * from teacher where T_id='$t_id'";
	$run_teach=mysqli_query($con,$check_teachers);
	$check=mysqli_num_rows($run_teach);
	if($check==0)
	{
		echo "<script>alert('Teacher doesnt exist')</script>";
		echo "<script>window.open('StudentSignUp.php','_self')</script>";
		exit();
	}
	$s_name=htmlentities(mysqli_real_escape_string($con,$_POST['s_name']));
	$s_contact=htmlentities(mysqli_real_escape_string($con,$_POST['S_Contact']));
	$school=htmlentities(mysqli_real_escape_string($con,$_POST['School']));

	$ins="insert into student (T_id,S_Name,S_Contact,School) values ('$t_id','$s_name','$s_contact','$school')";
	$query=mysqli_query($con,$ins);
	if($query)
	{
		echo "<script>alert('account created')</script>";
		echo "<script>window.open('index1.php','_self')</script>";
	}
	else
	{
		//echo "error".mysqli_error($con);
		echo "<script>alert('Failed')</script>";
		echo "<script>window.open('create_student.php','_self')</script>";
	}
}
?>