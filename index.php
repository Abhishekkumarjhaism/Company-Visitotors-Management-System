<?php  
	
session_start();
error_reporting(0);
$msg="";
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
    $adminuser=$_POST['username'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbladmin where  UserName='$adminuser' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['cvmsaid']=$ret['ID'];
     header('location:dashboard.php');
    }
    else{
    $msg="Invalid Credentials.";
    }
  }
  ?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>CVMS ADMIN</title>
  
  <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
  <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
<div class="bottom" style="margin-top:5px;color:red;"><h3>Company Visitors Management System</h3></div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	
  <div id="clouds">
	<div class="cloud x1"></div>
	<!-- Time for multiple clouds to dance around -->
	<div class="cloud x2"></div>
	<div class="cloud x3"></div>
	<div class="cloud x4"></div>
	<div class="cloud x5"></div>
</div>

<section class="container">
   <div style="margin:30% 35% 30% 35%;width: 30%; border-radius:10px;padding:10px;background: #2c3338;">
<p style="color:green;text-align:center;font-size:20px"><?php if($msg){ echo $msg;}?></p>
    <p class="h3 text-center text-light" style="border-bottom:2px solid ">ADMIN LOGIN</p>
    <form method="post">
        <div class="row">
         <div class="form-group col-md-12 text-light ">
         <label for="user">User name*</label>
         <input type="text" class="form-control " name="username" style="background:initial;color:white;width:100%" required>
         </div>
         <div class="form-group col-md-12 text-light ">
         <label for="pass">Password*</label>
         <input type="password" class="form-control" name="password" style="background:initial;color:white;width:100%" required>
         </div>
         <div class="col-md-6 text-center">
     <button type="submit" name="submit" class="btn btn-primary  waves-effect ">LOGIN</button>
	</div>
	<div class="col-md-6 text-center">
	<a href="adminsignup.php" class="btn btn-primary  waves-effect ">SIGN UP</a>
    	 </div>
         </div>
      </form>
      <br /><br />
<div class="d-flex justify-content-center">
<a class="btn btn-light" href="forgot-password.php">Forgot-Password</a>
</div>
    </div>
    
</section>
      
       

       <!-- end login -->

    
    
  
</body>
</html>


