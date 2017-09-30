<html>
<title>
connection with database;
</title>
<body>
<h1><font color="Blue"><u><b>Student Registation form</b></u></font></h1>
<fieldset size="10">
<form method="post">
    <b>name:</b><input type="text"name="textbox1" size="20"align="center"><br/><br/>
	
   <b>mobile:</b><input type="text2"name="textbox2"size="20"<br/><br/>
	<br/><br/>
    <input type="submit">
	</form>
</fieldset>
</body>
<?php
$connection=mysql_connect("localhost","root","");
if(!$connection)
{
	die("selection is faild".mysql_error());
}
else
{
	echo "connected!!";
}

?>
</html>