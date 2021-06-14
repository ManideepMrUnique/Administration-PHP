<?php 
		include ("includes/connection.php");
		$result=mysqli_query($con,"Select * from student");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Teacher View</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
</head>
<style>
	 	body{
  		overflow-x: hidden;
  		background-image: url("view/Images/4.jpg");
  	}
  	.well{
  		background-image:url("view/Images/4.jpg") ;
  	}
  	
  	th
  	{
  		padding: 50px;
  		font-size: 20px;
  	}
  	td{
  		font-size: 15px;
  		padding: 5px;
  		background-color: 	#330000;
  	}
</style>
<body>
	<div class="row">
		<div class="col-md-12">
			<div class="well" >
				<center><h1 style="color:white;">View of the Teacher</h1></center>
			</div>
		</div>
	</div>
		<div class="row">
		<div classs="col-12-md">
			<table align="center" border="2px" style="width: 400px; line-height:30px; color: white;">
				<thead>
				<tr>
					<th colspan="6" style="background-color: #808080;"><h2 align="center">Student Record</h2></th>
				</tr>
				</thead>
				<thead>
				<tr style="background-color: #b34d4d" >
					<th>S_id</th>
					<th>T_id</th>
					<th>S_Name</th>
					<th>S_Contact</th>
					<th>School</th>
				</tr>
				</thead>
				<tbody>
				<?php
				while($rows=mysqli_fetch_array($result))
				{
				?>
				<tr>
					<td><?php echo $rows['S_id'] ?></td>
					<td><?php echo $rows['T_id'] ?></td>
					<td><?php echo $rows['S_Name'] ?></td>
					<td><?php echo $rows['S_Contact'] ?></td>
					<td><?php echo $rows['School'] ?></td>
				</tr>
			<?php
			}
			?>
			</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<p align="center" style="color: white;">Create a Student: /t/create &nbsp &nbsp Update a Student: /t/update
			&nbsp &nbsp Delete a Student: /t/delete &nbsp &nbsp Home: /
		</p>
	</div>

</body>
</html>