<html>
<head>
<title>
php function 
</title>
</head>
<body>
<?php
    function writename($name)
	{
		echo $name;
	}
   echo "my name is:";
	writename("rashed");
?>
<?php
  echo $_post("name");
  echo $_post("age");
?>
</body>
<input action="function.php" method="post">
Name:<input name="name"/>
age:<input age="age"/
<input type="submit"/>
</html>