<?php 
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'project123');
$q="select * from doner Where username='$username'"; 
$p="select * from doner Where password='$password'";
$result=mysqli_query($con,$q);
$result1=mysqli_query($con,$p);
$num=mysqli_num_rows($result);
$num1=mysqli_num_rows($result1);

if(($num)&&($num1))
{	header('Location: doner123.html');}
else
	{echo "error 404";}
mysqli_close($con);
?>