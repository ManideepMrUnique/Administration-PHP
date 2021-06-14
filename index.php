<!DOCTYPE html>
<html>
<head>
  <title>Login and SignUp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style >
    body{
      background-color: black;
 
    }
    #centered1
    {
      position:absolute;
      font-size: 10px;
      top:30%;
      left:30%;
    
      
    }
    #centered2
    {
      position:absolute;
      font-size: 10px;
      top:40%;
      left:30%;
      
    }
    #centered3
    {
      position: absolute;
      font-size: 10px;
      top: 60%;
      left:30%;
        
      
    }
    #signup{
      position: relative;
      left:150px;
      width: 60%;
      background-color:#fff;
      border:1px solid #1da1f2;
      color:#1da1f2;
      border-radius: 30px;
      text-align: center;
    }
    #signin
    {
      position: relative;
      left:150px;
      width:60%;
      border-radius: 30px;
      text-align: center;
    }
    .well{
      background-color: #20B2AA;
    }
  </style>
</head>
<body>
  <div class="row">
    <div class="col-md-12">
      <div class="well" >
        <center style="font-size: 30px;"><strong>Welcome to Intellify</strong></center>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6" style="background-image:url('view/Images/2.jpeg');">
      <form method="post" action="">
        <br><br><br><br><br><br><br><br><br><br><br><br>
      <button id="signin" class="btn btn-info btn-lg" name="signin">Teacher SignIn</button><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <?php
        if(isset($_POST['signin']))
        {
          echo "<script>window.open('T_SignIn.php','_self')</script>";
        }
      ?>
      </form>>
    </div>
    <div class="col-md-6" style="background-image: url('view/Images/1.jpeg');">
      <form method="post" action="">
        <br><br><br><br><br><br><br><br><br><br><br><br>
      <button id="signup" class="btn btn-info btn-lg" name="signup">Teacher SignUp</button><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <?php
        if(isset($_POST['signup']))
        {
          echo "<script>window.open('T_SignUp.php','_self')</script>";
        }
      ?>
      </form>>
    </div>
  </div>
</body>
</html> 