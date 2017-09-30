<?php
$con=mysqli_connect('localhost','root','');
if($con)
{
	echo"connect!!";
}
$db_select=mysql_select_db("student",$con);
?>

<?php

$result=mysql_query("INSERT INTO s1(name,id,depart)values('$_POST[name]','$_POST[id]','$_POST[depart]')",$con);

?>