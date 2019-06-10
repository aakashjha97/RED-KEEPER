<?php
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'project123');
$q="insert into contact(name,email,comment) values ('$name','$email','$comment')";
$result=mysqli_query($con,$q);
if($result)
	{?>
<h1>Thank you for your valualbe comments.it is very precious for us.</h1>
<?php
}
mysqli_close($con);
?>