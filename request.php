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
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'project123');
$q="select * from bloodrequest";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
?>
<table align="center"  border="1px" bordercolor="green" cellpadding="5px" cellspacing="0px">
	<tr bgcolor="red">
		<td>REQUEST ID</td>
		<td>BLOOD GROUP REQUESTED</td>
        <td>LAST DATE</td>
        <td>QUANTITY REQUESTED</td>
	</tr>
<?php
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($result);
?>
<tr>
<td>
<?php
echo $row['reqid'];
?></td>
<td>
<?php
echo $row['bloodgroup'];
?></td>
<td>
<?php
echo $row['lastdate'];
?></td>
<td>
<?php
echo $row['reqqty'];
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