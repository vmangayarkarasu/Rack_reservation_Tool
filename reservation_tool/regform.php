<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reservation Tool</title>
  <meta charset="utf-8">
  <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://use.fontawesome.com/e8d21bbd8e.js"></script>
  
  <style>
  
  	.mynavhdr1 li{
	
	border-left:1px solid #504c4f;
	border-right:1px solid #504c4f;
	
	}
	.mynavhdr1 li:hover{
	
	background:#504c4f;
	
	}
	
	.mynavhdr2 li{
	
       height:80px;
	
	}
	.mynavhdr2 li:hover{
	
	background:white;
	position:relative;
	
	}
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
	  height:50%;
      min-height:50px;
  }
	footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
  </style>
</head>
<body>
<header class="header header-menu-fullw">
<nav class="navbar navbar-inverse" style="border-radius:0px">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!---a class="navbar-brand" href="#">Brand</a--->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
      <ul class="nav navbar-nav mynav navbar-right">
         <li><a href="index.html"><i class="fa fa-sign-in" style="color:red"></i>&nbsp;&nbsp;&nbsp;HOME</a></li>
		     
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>

<div class="container">
  <h2>Register form</h2>
  <form action="index.html" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="text" class="form-control" name="username" placeholder="Enter Username">
    </div>
	<div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password" placeholder="Enter Password">
    </div>
	<div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter Email">
    </div>
	<div class="form-group">
      <label for="email">Mobile:</label>
      <input type="number" class="form-control" name="mobile" placeholder="Enter Mobile">
    </div>
	<div class="form-group">
      <label for="email">Address:</label>
      <input type="text" class="form-control" name="address" placeholder="Enter Address">
    </div>
   
    <button type="Register" class="btn btn-success">Submit</button><br><br>
	<?php
error_reporting(0);
 echo $_GET["err"];
 ?>
  </form>
</div>

    <footer>
                   <div class="container text-center">
							Copyright &copy; 2017 <a href="index.html">DoorStep</a> &nbsp;| &nbsp;All Rights Reserved
					</div>
	               </footer>

</body>
</html>

