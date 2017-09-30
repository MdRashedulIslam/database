<html>
<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo("not connected");
}
$db_select=mysqli_select_db($con,"mydata");
$n=$_POST['name'];
$m=$_POST['mobile'];
$sql="INSERT INTO data(name,mobile)VALUES('$n','$m')";
$result=mysqli_query($con,$sql);
if(!$result)
{
	echo"insert";
}
?>
<style>
th
{
	border:1px solid gray;
	height:35px;
	width:50px;
	text-align:center;
	background:#fff;
	color:#000;
}
td
{
	border:1px solid gray;
	height:100px;
	width:35px;
	text-align:center;
}
</style>
<div class="table">
<table>
<tr>
<th>Name</th>
<th>Mobile</th>
<tr>
<?php
$sql="SELECT * FROM data";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>";
	echo $row['name'];
	echo"</td>";
	echo"<td>";
	echo$row['mobile'];
	echo"</td>";
	echo"<tr>";
}
?>
</table>
</html>