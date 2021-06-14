<!DOCTYPE html>
<html>
<head>
  <title>Signin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    body{
      overflow-x: hidden;
      background-color: black;
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
      background-color: #187FAB;
    }
    #signin{
      width:60%;
      border-radius: 30px;
    }
    .overlap-text{
    position: relative;
    }
    .overlap-text a{
      position:absolute;
      top:8px;
      right:10px;
      font-size: 14px;
      text-decoration: none;
      font-family: 'Overpass Mono',monospace;
      letter-spacing: -1px;
    }
</style>
<body>
  <div class="row" style="background-color: #187FAB;>
    <div class="col-md-12">
      <div class="well">
        <center><h1>Social Network</h1></center>
      </div>
    </div>
<div class="row">
  <div class="col-md-12">
    <div class="main-content" style="background-color: DarkGrey;">
      <div class="header">
        <h3 style="text-align: center;"><strong>Login</strong></h3>
        
      </div>
      <div class="l-part">
        <form action="" method="post">
          <input type="email" name="email" placeholder="Email" required="required" class="form-control input-md"><br>
          <div class="overlap-text">
            <input type="number" name="T_id" placeholder="Enter the T_id assigned to you by the college" required="required" class="form-control input-md"><br>
          </div>
          <a style="float: right; text-decoration: none;"
            data-toggle="tooltip" title="signup"  href="T_SignUp.php">Don't have a account?</a>
            <br><br>
            <center><button id="signin" class="btn btn-info btn-lg" name="login">Login</button>
            </center>
            <?php include("login.php"); ?>
        </form>
      </div>
      
    </div>
    
  </div>
  
</div>
</body>
</html>