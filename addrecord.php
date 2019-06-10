<?php
$name=$_POST['name'];
$did=$_POST['did'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$dob=$_POST['dob'];
$bloodgroup=$_POST['bloodgroup'];
$contactno=$_POST['contactno'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'project123');
$q="insert into doner1 (did,name,age,sex,dob,bloodgroup,contactno) values ($did,'$name',$age,'$sex','$dob','$bloodgroup',$contactno)";
$result=mysqli_query($con,$q);
if($result)
	{?>
<div class="jumbotron"><blockquote>RECORD ADDED SUCCESSFULLY</blockquote></div>
<?php
}
mysqli_close($con);
?>