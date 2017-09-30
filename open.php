
<?php
$connect=mysqli_connect('localhost','root','','examin');
if(!$connect)
{
	echo"error";
}
else
{
	echo"connect!!!";
}
echo "<br/>";
$sql="SELECT *FROM student1";
$result=mysqli_query($connect,$sql);
foreach($result as $key =>$value)
{
	echo $value ['name'];
	echo $value  ['id'];
	echo $value  ['dept'];
	echo "<br/>";
}
?>
</font>