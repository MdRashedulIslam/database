<html>
<body>
<mark>
<?php
$name=array("rashed","islam","shaon","dhrobalok","sharier");
for($i=0;$i<7;$i++)
{
	echo $name[$i];
	echo"<br/>";
}
?>
</mark>
<font size="6">
<pre>
<?php
print_r($name);
?>
</pre>
pow:
<?php
echo pow(2,4);
?>
<br/>
<?php
$i=80;
if($i>=80)
{
	echo"cgpa is=A+";
}
if($i>=70&&$i<80)
{
	echo"cgpa is A";
}
?>
<font/>
</body>
</html>