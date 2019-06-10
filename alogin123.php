<?php 
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bhuvi');
$q="select * from admin Where username='$username' and password='$password' "; 
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if(($num))
{	header('Location: receptionist1.html');}
else
	echo "WRONG USERNAME OR PASSWORD";
mysqli_close($con);
?>