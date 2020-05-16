<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>
<body>


<?php

$name=$_POST['username'];
$pass=$_POST['password'];
$ec = base64_encode('$pass');

$conn=mysqli_connect("localhost","root","","training");

	$check=$conn->query("select *from UserReg where name='$name' and pass='$ec'");
	$records = $check->fetch_assoc();
	/* if($records['id']){ */
		while(!$records)
?>
 <table style="width:100%">
  <tr>
     <th>Id</th>
    <th>Name</th>
    <th>Email</th> 
	<th>Mobile</th>  
	<th>address</th>  
  </tr>
  <tr>
      <td><?php echo $records['id']?></td>
    <td><?php echo $records['name']?></td>
    <td><?php echo $records['email']?></td> 
	<td><?php echo $records['mobile']?></td> 
	<td><?php echo $records['address']?></td> 
    </table>	
<?php
	/* }
	else
	{

     echo "User does not exist";
	 header("location:loginform.php?err=User does not exist");
	}
 */


?>
</body>