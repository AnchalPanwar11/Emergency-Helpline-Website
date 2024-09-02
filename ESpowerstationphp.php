<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php
$a1=$_REQUEST['s1'];
$a2=$_REQUEST['s2'];
$a3=$_REQUEST['s3'];
$a4=$_REQUEST['s4'];
$a5=$_REQUEST['s5'];
$a6=$_REQUEST['s6'];
$a7=$_REQUEST['s7'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
   die("could not connect to server".mysql_error());
}
mysql_select_db("myphpproject",$con);
mysql_query("update esdetail set POLoc='$a2',POPhnNo='$a3',SDEName='$a4',SDEPhnNo='$a5',JEName='$a6',JEPhnNo='$a7' where EmergId='$a1'");
mysql_close($con);
?>
</body>
</html>
