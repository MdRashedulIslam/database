<?php
echo $n=$_POST['name'];
echo"<br/>";
echo $i=$_POST['id'];
echo"<br/>";
echo $d=$_POST['department'];
echo"<br/>";
$connec=mysqli_connect('localhost','root','','examin');
if($connec)
{
	echo"connect!!";
}
else
{
	echo"faild";
}
$sql="SELECT name FROM student1";
$result=mysqli_query($connec,$sql);
foreach($result as $key=>$value)
{
	echo $value['name'];
}
?>