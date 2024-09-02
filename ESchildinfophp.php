<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php
$a1=$_REQUEST['c1'];
$a2=$_REQUEST['c2'];
$a3=$_REQUEST['c3'];
$a4=$_REQUEST['c4'];
$a5=$_REQUEST['c5'];
$a6=$_REQUEST['c6'];
$a7=$_REQUEST['c7'];
$a8=$_REQUEST['c8'];
$a9=$_REQUEST['c9'];
$a10=$_REQUEST['c10'];
$a11=$_REQUEST['c11'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
   die("could not connect to server".mysql_error());
}
mysql_select_db("myphpproject",$con);
mysql_query("update esdetail set CIcaller='$a1',CName1='$a3',CAge1='$a4',CBG1='$a5',CName2='$a6',CAge2='$a7',CbG2='$a8',CName3='$a9',CAge3='$a10',CBG3='$a11' where EmergId='$a2'");
mysql_close($con);
?>
</body>
</html>
