<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php
$a1=$_REQUEST['f1'];
$a2=$_REQUEST['f2'];
$a3=$_REQUEST['f3'];
$a4=$_REQUEST['f4'];
$a5=$_REQUEST['f5'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
   die("could not connect to server".mysql_error());
}
mysql_select_db("myphpproject",$con);
mysql_query("update esdetail set FSLoc='$a2',FSPhnNo='$a3',FSDistance='$a4',otherFSNo='$a5' where EmergId='$a1'");
mysql_close($con);
?>
</body>
</html>
