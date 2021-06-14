<?php
$con= mysqli_connect("localhost","root","","intellify");
	if($con==FALSE)
		echo "No connection";
if(isset($_POST['update']))
{
	$id=htmlentities(mysqli_real_escape_string($con,$_POST['s_id']));
	$check_students="select * from student where S_id='$id'";
	$run_s=mysqli_query($con,$check_students);
	$check=mysqli_num_rows($run_s);
	if($check==0)
	{
		echo "<script>alert('Sudent does not exist')</script>";
		echo "<script>window.open('update_student.php','_self')</script>";
		exit();
	}
	if($_POST['s_name']!=NULL)
	{
		$s_name=$_POST['s_name'];
		$query=mysqli_query($con,"update student set S_Name='$s_name' where S_id='$id'");
		if(!$query)
		{
		//echo "error".mysqli_error($con);
		echo "<script>alert('Failed')</script>";
		echo "<script>window.open('update_student.php','_self')</script>";
		}
	}
	if($_POST['S_Contact']!=NULL)
	{
		$s_c=$_POST['S_Contact'];
		$query=mysqli_query($con,"update student set S_Contact='$s_c' where S_id='$id'");
		if(!$query)
		{
		echo "<script>alert('Failed')</script>";
		echo "<script>window.open('update_student.php','_self')</script>";
		exit();
		}
	}
	if($_POST['School']!=NULL)
	{
		$scl=$_POST['School'];
		$query=mysqli_query($con,"update student set School='$scl' where S_id='$id'");
		if(!$query)
		{
		echo "<script>alert('Failed')</script>";
		echo "<script>window.open('update_student.php','_self')</script>";
		exit();
		}
	}
	echo "<script>alert('Updated')</script>";
	echo "<script>window.open('index1.php','_self')</script>";
}
?>