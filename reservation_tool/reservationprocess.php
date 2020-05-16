
<?php

$name=$_POST['username'];
$pass=$_POST['password'];
$ec = base64_encode('$pass');
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];

$conn=mysqli_connect("localhost","root","","doorsyqb_bookshop");
if($name!=""){
	$check=$conn->query("select *from UserReg where name='$name'");
	$records = $check->fetch_assoc();
	if($records>= 1){
		echo "user already available";
		 header("location:regform.php?err=User already available");
	}
	else
	{
    $query =$conn->query("insert into UserReg(name,pass,email,mobile,address) values('$name','$ec','$email','$mobile','$address')
     echo "successful registered";
	 header("location:regform.php?err=Successful registered");
	}
}


?>