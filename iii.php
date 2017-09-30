<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo"not connect!";
}
$db_select=mysqli_select_db($con,"sss");
$name=$_POST['name'];
$id=$_POST['id'];
$sql="INSERT INTO s1(name,id)VALUES('$name','$id')";
$result=mysqli_query($con,$sql);
if(!$result)
{
	echo"notselect";
}
else
{
	echo"insert";
}
?>