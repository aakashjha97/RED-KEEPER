<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'project123');
$q="select * from doner1";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!doctype html>
<html>
<head>
<title>blood donation management</title>
<style type="text/css">
table,tr,th,td{border:2px solid black;
border-collapse:collapse;}</style>
</head>
<body>
<form action="/New folder/delete123.php" method="post">
<table>
<tr><th>donor id</th>
<th>name</th>
<th>age</th>
<th>sex</th>
<th>dob</th>
<th>bloodgroup</th>
<th>contactno</th>
<th>select to delete</th>
</tr>
<?php for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_assoc($result);
	?>
	<tr>
	<td><?php echo $row['did']?></td>
	<td><?php echo $row['name']?></td>
	<td><?php echo $row['age']?></td>
	<td><?php echo $row['sex']?></td>
	<td><?php echo $row['dob']?></td>
	<td><?php echo $row['bloodgroup']?></td>
	<td><?php echo $row['contactno']?></td>
	<td><input type="checkbox"value="<?php echo $row['did'];?>" name="b<?php echo $row['did'];?>"></td>
	</tr>
<?php
}
?>
<tr><td colspan="7"><input type="submit" value="delete"/></td></tr>
</table>
</form>
</body>
</html>
deleteform.php
Displaying delete.php.