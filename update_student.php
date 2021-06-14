<!DOCTYPE html>
<html>
<head>  
	<title>Update</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
  <style>
  	body{
  		overflow-x: hidden;
  		background-image: url("view/Images/5.jpeg");
  	}
  	.main-content{
  		width:50%;
  		height:40%;
  		background-color: LightBlue;
  		margin:10px auto;
  		border:2px solid #e6e6e6;
  		padding: 40px 50px;
  	}
  	.header
  	{
  		border:0px solid #000;
  		margin-bottom:5px;
  	}
  	.well{
  		background-image:url("view/Images/5.jpeg") ;
  	}
  	#update{
  		width:60%;
  		border-radius: 30px;
  		color:black;
  	}
  </style>

</head>
<body>
	<div class="row">
		<div class="col-md-12">
			<div class="well">
				<center><h1 style="color:white;">Enter the details</h1></center>
			</div>
		</div>
		
	</div>
	<div class="row" >
		<div class="col-md-12">
			<div class="main-content" >
				<div class="header">
					<h3 style="text-align: center;"><strong>Enter only the values to be updated</strong></h3>
				</div>
				<div class="l-part">
					<form action="" method="post">
						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-pencil"></span>
							</span>
							<input type="number" class="form-control" placeholder="s_id of the student to be updated" name="s_id" required="required">
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-pencil"></span>
							</span>
							<input type="text" class="form-control" placeholder="S_Name-leave it blank if not be updated" name="s_name" >
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-pencil"></span>
							</span>
							<input type="text" class="form-control" placeholder="S_Contact-leave it blank if not be updated" name="S_Contact" >
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-pencil"></span>
							</span>
							<input type="text" class="form-control" placeholder="School-leave it blank if not be updated" name="School" >
						</div>
						<br>
						<center><button id="update" class="btn btn-info btn-lg" name="update">Update</button>
						</center>
						<?php include("update_values.php");?>
					</form>
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>