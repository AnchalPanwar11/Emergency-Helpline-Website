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
$a20=$_REQUEST['h1'];
$a21=$_REQUEST['h2'];
$a22=$_REQUEST['h3'];
$a23=$_REQUEST['h4'];
$a24=$_REQUEST['h5'];
$a25=$_REQUEST['h6'];
$a26=$_REQUEST['h7'];
$a27=$_REQUEST['h8'];
$a28=$_REQUEST['h9'];
$a29=$_REQUEST['p1'];
$a30=$_REQUEST['p2'];
$a31=$_REQUEST['p3'];
$a32=$_REQUEST['p4'];
$a33=$_REQUEST['p5'];
$a34=$_REQUEST['p6'];
$a35=$_REQUEST['p7'];
$a36=$_REQUEST['f1'];
$a37=$_REQUEST['f2'];
$a38=$_REQUEST['f3'];
$a39=$_REQUEST['f4'];
$a40=$_REQUEST['f5'];
$a41=$_REQUEST['s1'];
$a42=$_REQUEST['s2'];
$a43=$_REQUEST['s3'];
$a44=$_REQUEST['s4'];
$a45=$_REQUEST['s5'];
$a46=$_REQUEST['s6'];
$a47=$_REQUEST['s7'];
$a48=$_REQUEST['c1'];
$a49=$_REQUEST['c2'];
$a50=$_REQUEST['c3'];
$a51=$_REQUEST['c4'];
$a52=$_REQUEST['c5'];
$a53=$_REQUEST['c6'];
$a54=$_REQUEST['c7'];
$a55=$_REQUEST['c8'];
$a56=$_REQUEST['c9'];
$a57=$_REQUEST['c10'];
$a58=$_REQUEST['c11'];
$a59=$_REQUEST['e14'];
echo"done";
$con=mysql_connect("localhost","root","");
if(!$con)
{
   die("could not connect to server".mysql_error());
}
mysql_select_db("myphpproject",$con);
mysql_query("INSERT INTO esdetail VALUES ('$a1', '$a2', '$a3', '$a4', '$a5', '$a6', '$a7', '$a8', '$a9', '$a10', '$a11', '$a12', '$a13', '$a14', '$a15', '$a16', '$a17', '$a18', '$a19', '$a20', '$a21', '$a22', '$a23', '$a24', '$a25', '$a26', '$a27', '$a28', '$a29', '$a30', '$a31', '$a32', '$a33', '$a34', '$a35', '$a36', '$a37', '$a38', '$a39', '$a40', '$a41', '$a42', '$a43', '$a44', '$a45', '$a46', '$a47', '$a48', '$a49', '$a50', '$a51', '$a52', '$a53', '$a54', '$a55', '$a56', '$a57', '$a58','$a59')");
mysql_close($con);
?>
</body>
</html>
