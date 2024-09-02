<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php
//$a1=$_REQUEST['h1'];
$a2=$_REQUEST['h2'];
$a3=$_REQUEST['h3'];
$a4=$_REQUEST['h4'];
$a5=$_REQUEST['h5'];
$a6=$_REQUEST['h6'];
$a7=$_REQUEST['h7'];
$a8=$_REQUEST['h8'];
$a9=$_REQUEST['h9'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
   die("could not connect to server".mysql_error());
}
mysql_select_db("myphpproject",$con);
mysql_query("update esdetail set HName='$a3',H2Name='$a4',AmbNo='$a5',Distance1='$a6',Distance2='$a7',H1PhnNo='$a8',H2PhnNo='$a9' where EmergId='$a2'");
mysql_close($con);
?>
</body>
</html>
