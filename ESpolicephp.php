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
$a8=$_REQUEST['p8'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
   die("could not connect to server".mysql_error());
}
mysql_select_db("emergencysystem",$con);
mysql_query("update esdetail set c2='$a2',c3='$a3',c4='$a4',c5='$a5',c6='$a6',c7='$a7',c8='$a8' where id='$a1'");
mysql_close($con);
?>
</body>
</html>
