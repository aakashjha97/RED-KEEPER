<?php
$olddid=$_POST['did1'];
$name=$_POST['name'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$dob=$_POST['dob'];
$bloodgroup=$_POST['bloodgroup'];
$contactno=$_POST['contactno'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'project123');
$q="UPDATE doner1 SET name='$name',age='$age',sex='$sex',dob='$dob',bloodgroup='$bloodgroup',contactno='$contactno'  WHERE did='$olddid' ";
$result=mysqli_query($con,$q);
if($result)
	{?>
<div class="jumbotron"><blockquote>RECORD UPDATED SUCCESSFULLY</blockquote></div>
<?php
}
mysqli_close($con);
?>