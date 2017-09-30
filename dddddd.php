<?php
require_once('datyabase/database.php');
$name=$_POST['name'];
$id=$_POST['id'];
$n="select*from info where name like'%$name%'";
$i="select*from info where name like'%$id%'";

$result=mysqli_query($n,$i);
echo $result;
?>
<?php
$connec=mysqli_connect('localhost','root','','examin');
if(!$connec)
{
	echo"not connect";
}
else
{
	echo "connect!!!";
	echo"<br/>";
}
$sql="SELECT dept FROM student1";
$result=mysqli_query($connec,$sql);
foreach($result as $key=>$value)
{
	echo $value['dept'];
	echo"<br/>";
}