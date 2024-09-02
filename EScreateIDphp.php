<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$a1=$_REQUEST['ag1'];
$a2=$_REQUEST['ag2'];
$a3=$_REQUEST['ag3'];
$a4=$_REQUEST['ag4'];
$a5=$_REQUEST['ag5'];
$a6=$_REQUEST['ag6'];
echo"done";
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("could not connect to server".mysql_error());
}
mysql_select_db("myphpproject",$con);
mysql_query("INSERT INTO createID VALUES('$a1','$a2','$a3','$a4','$a5','$a6')");
mysql_close($con);
?>
</body>
</html>