<!DOCTYPE html>
<html>
<head>  
	<title>Create</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
  <style>
  	body{
  		overflow-x: hidden;
  		background-image: url("view/Images/4.jpg");
  	}
  	.main-content{
  		width:50%;
  		height:40%;
  		background-color: #fff;
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
  		background-image:url("view/Images/4.jpg") ;
  	}
  	#signup{
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
				<center><h1 style="color:white;">Create a Student</h1></center>
			</div>
		</div>
		
	</div>
	<div class="row" >
		<div class="col-md-12">
			<div class="main-content" style="background-color: #87CEEB;">
				<div class="header">
					<h3 style="text-align: center;"><strong>Enter the details</strong></h3>
				</div>
				<div class="l-part">
					<form action="" method="post">
						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-pencil"></span>
							</span>
							<input type="text" class="form-control" placeholder="S_Name" name="s_name" required="required">
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-pencil"></span>
							</span>
							<input type="number" class="form-control" placeholder="Teacher_id" name="t_id" required="required">
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-pencil"></span>
							</span>
							<input type="text" class="form-control" placeholder="S_Contact" name="S_Contact" required="required">
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-pencil"></span>
							</span>
							<input type="text" class="form-control" placeholder="School" name="School" required="required">
						</div>
						<br>
						<center><button id="signup" class="btn btn-info btn-lg" name="s_sign_up">SignUp</button>
						</center>
						<?php include("insert_student.php");?>
					</form>
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>