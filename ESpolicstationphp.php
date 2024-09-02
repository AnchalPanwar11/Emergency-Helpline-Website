<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php
$a1=$_REQUEST['p1'];
$a2=$_REQUEST['p2'];
$a3=$_REQUEST['p3'];
$a4=$_REQUEST['p4'];
$a5=$_REQUEST['p5'];
$a6=$_REQUEST['p6'];
$a7=$_REQUEST['p7'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
   die("could not connect to server".mysql_error());
}
mysql_select_db("myphpproject",$con);
mysql_query("update esdetail set PSdet='$a1',PSName='$a2',ControlRoomNo='$a3',Distance='$a5',otherFSNo='$a6',COPhnNo='$a7' where EmergId='$a4'");
mysql_close($con);
?>
</body>
</html>
