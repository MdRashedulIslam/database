<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo"not connected:";
}
$db_select=mysqli_select_db($con,'xxx');

$name=$_POST['name'];
$id=$_POST['id'];
$sql="INSERT INTO yyy(name,id)VALUES('$name','$id')";
$result=mysqli_query($con,$sql);
if(!$result)
{
	echo"not insert";
}
else
{
	echo"insert";
}

?>