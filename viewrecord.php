<html>
<head>
	<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

</head>
<body>
<?php
$name=$_POST['name'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'project123');
$q="select * from doner1 where name='$name'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
?>
<table align="center"  border="1px" bordercolor="green" cellpadding="5px" cellspacing="0px">
	<tr bgcolor="red">
		<td>DONER ID</td>
		<td>NAME</td>
		<td>AGE</td>
		<td>SEX</td>
		<td>DATE OF BIRTH</td>
		<td>BLOOD GROUP</td>
		<td>CONTACT NO.</td>
	</tr>
<?php
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($result);
?>
<tr>
<td>
<?php
echo $row['did'];
?></td>
<td>
<?php
echo $row['name'];
?></td>
<td>
<?php
echo $row['age'];
?>
</td>
<td>
<?php
echo $row['sex'];
?></td>
<td>
<?php
echo $row['dob'];
?></td>
<td>
<?php
echo $row['bloodgroup'];
?></td>
<td>
<?php
echo $row['contactno'];
?></td>
</tr>
<?php
}
?>
</table>
<?php
mysqli_close($con);
?>
</body>
</html>