<?php

class Route
{
	private $uri=[];
	public function add($uri)
	{
		$this->uri[] = $uri;
	} 

	public function submit()
	{
		$request=$_SERVER['REQUEST_URI'];
		if($request=='/mvc/index1.php/t/create')
		{
			echo "<script>window.open('/mvc/create_student.php','_self')</script>";
		}
		if($request=='/mvc/index1.php/t/update')
		{
			echo "<script>window.open('/mvc/update_student.php','_self')</script>";
		}
		if($request=='/mvc/index1.php/t/delete')
		{
			echo "<script>window.open('/mvc/delete_student.php','_self')</script>";
		}
	}
}
