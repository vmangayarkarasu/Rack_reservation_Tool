<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reservation_Tool</title>
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
	  <li><a href="index.html"><i class="glyphicon glyphicon-shopping-cart" style="color:red"></i>&nbsp;&nbsp;&nbsp;DESK</a></li>
        <li><a href="index.html"><i class="fa fa-sign-in" style="color:red"></i>&nbsp;&nbsp;&nbsp;LOGIN</a></li>
		
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>

<div class="table-responsive-md btn-table">
  <h2>Rack Router Reservation</h2>
  <table class="table table-bordered table-dark">
  <thead>
    <?php
      
        if(isset($_POST['RESERVED'])) { 
            <form action="reserve.php" >
        } 
        if(isset($_POST['Unreserve'])) { 
            <form action="reserve.php" >
        } 
    ?> 
    <tr>
      <th scope="col">#</th>
      <th scope="col">ROUTER</th>
      <th scope="col">IP ADDRESS</th>
	   <th scope="col">MAC ADDRESS</th>
      <th scope="col">RESERVATION STATUS</th>
	  <th scope="col">USER NAME</th>
	   <th scope="col">Hr RESERVED</th>
	   <th scope="col">REMAIN Hr OF RESERV</th>
	    <th scope="col">RESERVATION OPTION</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>TXCHXB6</td>
      <td>10.0.0.1</td>
	  <td>AA.AA.AA.AA.22</td>
      <td>FREE</td>
	  <td>vmanga238</td>
	   <td>10</td>
	   <td> 2 </td>
	  
<td><button type="submit" value="RESERVED"class="btn btn-success">Reserve</button><button type="submit" value="Ureserve"class="btn btn-primary" >Unreserve</button><br><br></td>
  
   </tr> 
	<tr>
      <th scope="row">2</th>
      <td>XF3</td>
      <td>10.0.0.1</td>
	   <td>AA.AA.AA.AA.22</td>
      <td>RESERVED</td>
	  <td>vmanga238</td>
	   <td>10</td>
	   <td> 2 </td>
	    <td><button type="submit" class="btn btn-success">Reserve</button><button type="submit" class="btn btn-primary">Unreserve</button><br><br></td>
    </tr>
    <tr>
      <th scope="row">3</th>
       <td>XB3</td>
      <td>10.0.0.1</td>
	   <td>AA.AA.AA.AA.22</td>
      <td>RESERVED</td>
	  <td>vmanga238</td>
	   <td>10</td>
	   <td> 2 </td>
	  <td><button type="submit" class="btn btn-success">Reserve</button><button type="submit" class="btn btn-primary">Unreserve</button><br><br></td>
    </tr>
	 <tr>
      <th scope="row">4</th>
       <td>XB3</td>
      <td>10.0.0.1</td>
	   <td>AA.AA.AA.AA.22</td>
      <td>FREE</td>
	  <td>vmanga238</td>
	   <td>10</td>
	   <td> 2 </td>
	   <td><button type="submit" class="btn btn-success">Reserve</button><button type="submit" class="btn btn-primary">Unreserve</button><br><br></td>
    </tr>
	 <tr>
      <th scope="row">4</th>
       <td>XB3</td>
      <td>10.0.0.2</td>
	   <td>AA.AA.AA.AA.22</td>
      <td>RESERVED</td>
	  <td>vivek</td>
	   <td>10</td>
	   <td> 2 </td>
	  <td><button type="submit" class="btn btn-success">Reserve</button><button type="submit" class="btn btn-primary">Unreserve</button><br><br></td>
    </tr>
	 <tr>
      <th scope="row">5</th>
       <td>XB3</td>
      <td>10.0.0.10</td>
	   <td>AA.AA.AA.AA.22</td>
      <td>FREE</td>
	  <td>aadhi</td>
	   <td>10</td>
	   <td> 2 </td>
	   <td><button type="submit" class="btn btn-success">Reserve</button><button type="submit" class="btn btn-primary">Unreserve</button><br><br></td>
    </tr>
	<tr>
      <th scope="row">6</th>
       <td>XB3</td>
      <td>10.0.0.10</td>
	   <td>AA.AA.AA.AA.22</td>
      <td>FREE</td>
	  <td>aadhi</td>
	   <td>10</td>
	   <td> 2 </td>
	 <td><button type="submit" class="btn btn-success">Reserve</button><button type="submit" class="btn btn-primary">Unreserve</button><br><br></td>
    </tr>
	<tr>
      <th scope="row">7</th>
       <td>XB3</td>
      <td>10.0.0.10</td>
	   <td>AA.AA.AA.AA.22</td>
      <td>FREE</td>
	  <td>aadhi</td>
	   <td>10</td>
	   <td> 2 </td>
	   <td><button type="submit" class="btn btn-success">Reserve</button><button type="submit" class="btn btn-primary">Unreserve</button><br><br></td>
    </tr>
	<tr>
      <th scope="row">8</th>
       <td>XB3</td>
      <td>10.0.0.10</td>
	   <td>AA.AA.AA.AA.22</td>
      <td>FREE</td>
	  <td>aadhi</td>
	   <td>10</td>
	   <td> 2 </td>
	    <td><button type="submit" class="btn btn-success">Reserve</button><button type="submit" class="btn btn-primary">Unreserve</button><br><br></td>
    </tr>
	<tr>
      <th scope="row">9</th>
       <td>XB3</td>
      <td>10.0.0.10</td>
	   <td>AA.AA.AA.AA.22</td>
      <td>FREE</td>
	  <td>aadhi</td>
	   <td>10</td>
	   <td> 2 </td>
	<td><button type="submit" class="btn btn-success">Reserve</button><button type="submit" class="btn btn-primary">Unreserve</button><br><br></td>
    </tr>
	<tr>
      <th scope="row">10</th>
       <td>XB3</td>
      <td>10.0.0.10</td>
	   <td>AA.AA.AA.AA.22</td>
      <td>FREE</td>
	  <td>aadhi</td>
	   <td>10</td>
	   <td> 2 </td>
	  <td><button type="submit" class="btn btn-success">Reserve</button><button type="submit" class="btn btn-primary">Unreserve</button><br><br></td>
    </tr>
  </tbody>
</table>
</div>

    <footer>
                   <div class="container text-center">
							Copyright &copy; 2020 <a href="index.html">Reservation_Tool</a> &nbsp;| &nbsp;All Rights Reserved
					</div>
	               </footer>

</body>
</html>

