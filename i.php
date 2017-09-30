<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo("not connect");
}
$db_select=mysqli_select_db($con,"student");
$n=$_POST['name'];
$i=$_POST['id'];
$sql="INSERT INTO s1(name,id)VALUES('$n','$i')";
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