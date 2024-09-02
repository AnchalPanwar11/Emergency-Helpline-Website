<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php
$a1=$_REQUEST['e1'];
$a2=$_REQUEST['e2'];
$a3=$_REQUEST['e3'];
$a4=$_REQUEST['e4'];
$a5=$_REQUEST['e5'];
$a6=$_REQUEST['e6'];
$a7=$_REQUEST['e7'];
$a8=$_REQUEST['e8'];
$a9=$_REQUEST['e9'];
$a10=$_REQUEST['e10'];
$a11=$_REQUEST['e11'];
$a12=$_REQUEST['e12'];
$a13=$_REQUEST['e13'];
$a14=$_REQUEST['e14'];
$a15=$_REQUEST['e15'];
$a16=$_REQUEST['e16'];
$a17=$_REQUEST['e17'];
$a18=$_REQUEST['e18'];
$a19=$_REQUEST['e19'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
   die("could not connect to server".mysql_error());
}
mysql_select_db("myphpproject",$con);
mysql_query("update esdetail set MobNo='$a2',CallerName='$a3',CallerAge='$a4',callerAN='$a5', FatherName='$a6',FatherAge='$a7',FatherAN='$a8', 	MotherName='$a9',MotherAge='$a10',MotherAN='$a11',State='$a12',callerBG='$a13',district='$a14',FaherBG='$a15',TelNo='$a16',MotherBG='$a17',STr='$a18', 	HomeNo='$a19' where EmergId='$a1'");
mysql_close($con);
?>
</body>
</html>
