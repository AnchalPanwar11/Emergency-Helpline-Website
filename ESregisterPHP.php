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
$a14=$_REQUEST['e15'];
$a15=$_REQUEST['e16'];
$a16=$_REQUEST['e17'];
$a17=$_REQUEST['e18'];
$a18=$_REQUEST['e19'];
$a19=$_REQUEST['e20'];
$a20=$_REQUEST['e14'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
   die("could not connect to server".mysql_error());
}
mysql_select_db("myphpproject",$con);
mysql_query("INSERT INTO esdetail (EmergId, MobNo, CallerName,CallerAge,callerAN, FatherName,FatherAge,FatherAN, MotherName, MotherAge,MotherAN,State,callerBG, enterPass,district,FaherBG, TelNo, MotherBG , STr, HomeNo) VALUES ('$a1', '$a2', '$a3', '$a4', '$a5', '$a6', '$a7', '$a8', '$a9', '$a10', '$a11', '$a12', '$a13', '$a15', '$a16', '$a17', '$a18', '$a19', '$a20', '$a14')");
session_start();
$_SESSION['emrid']=$a1;
$redirect="Location: ESprofile.php";
header($redirect);
mysql_close($con);
?>
</body>
</html>
