<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
<link href="ESprofilecss.css" rel="stylesheet" type="text/css">
</head>
<center>
<div id="maindiv">
<div id="headerdiv"><label style="position:relative; color:#FFFFFF; top:16px; font-size:24px"><b>Your Profile</b></label></div>
<div id="bodydiv">
<table cellpadding="0" cellspacing="0" height="550" width="1250">
<tr>
<td width="300">
<div id="table1">
<table cellpadding="0" cellspacing="0" height="200" width="300">
<tr><td><div id="table2a"></div></td></tr>
<tr><td><div id="table1a"><a href="ESmainwebpage.php" style="position:relative; left:103px; top:10px">Home</a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr>
<tr><td><div id="table1a"><a href="ESmainwebpageContactus.php" style="position:relative; left:103px; top:10px">Contact Us</a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr>
<tr><td><div id="table1a"><a href="ESmainwebpageAboutus.php" style="position:relative; left:103px; top:10px">About us</a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr>
<tr><td><div id="table1a"><a href="ESuserlogout.php" style="position:relative; left:103px; top:10px">logout</a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr>
</table>
</div>
</td>
<td width="950">
<?php
session_start();
$a1=$_SESSION['emrid'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("could not connect to server".mysql_error());
}
mysql_select_db("myphpproject",$con);
$res=mysql_query("select *from esdetail where EmergId='$a1'");
if($row=mysql_fetch_array($res))
{
?>
<div id="table2">
<table height="550" width="950">
<tr><td></td><td></td><td></td><td><b>Emergency ID</b></td><td><font color="#666666"><?php echo $row['EmergId']; ?></font></td><td></td><td></td></tr>
<tr><td rowspan="3"></td><td><b>Caller's Name</b></td><td><font color="#666666"><?php echo $row['CallerName']; ?></font></td><td><b>Father's Name</b></td><td><font color="#666666"><?php echo $row['FatherName']; ?></font></td><td><b>Mother's Name</b></td><td><font color="#666666"><?php echo $row['MotherName']; ?></font></td></tr>
<tr><td><b>Caller's Age</b></td><td><font color="#666666"><?php echo $row['CallerAge']; ?></font></td><td><b>Father's Age</b></td><td><font color="#666666"><?php echo $row['FatherAge']; ?></font></td><td><b>Mother's Age</b></td><td><font color="#666666"><?php echo $row['MotherAge']; ?></font></td></tr>
<tr><td><b>Caller's Blood Group</b></td><td><font color="#666666"><?php echo $row['callerBG']; ?></font></td><td><b>Father's Blood Group</b></td><td><font color="#666666"><?php echo $row['FaherBG']; ?></font></td><td><b>Mother's Blood Group</b></td><td><font color="#666666"><?php echo $row['MotherBG']; ?></font></td></tr>
<tr><td></td><td><b>Caller's Adhaar No.</b></td><td><font color="#666666"><?php echo $row['callerAN']; ?></font></td><td><b>Father's Adhaar No.</b></td><td><font color="#666666"><?php echo $row['FatherAN']; ?></font></td><td><b>Mother'sAdhaar No.</b></td><td><font color="#666666"><?php echo $row['MotherAN']; ?></font></td></tr>
<tr><td></td><td><b>State</b></td><td><font color="#666666"><?php echo $row['State']; ?></font></td><td><b>District</b></td><td><font color="#666666"><?php echo $row['district']; ?></font></td><td><b>STR/Mohalla</b></td><td><font color="#666666"><?php echo $row['STr']; ?></font></td></tr>
<tr><td></td><td><b>Home No.</b></td><td><font color="#666666"><?php echo $row['HomeNo']; ?></font></td><td><b>Telephone No.</b></td><td><font color="#666666"><?php echo $row['TelNo']; ?></font></td><td><b>Password</b></td><td><font color="#666666"><?php echo $row['enterPass']; ?></font></td><td></td></tr>
</table>
</div>
<div id="linediv"></div>
<div id="bodydiv2"><label style="position:relative; font-size:44px; color:#099; top:60px"><center><b>REGISTRATION COMPLETED</b></center></label></div>

<?php
}
?>
</td>
</tr>
</table>
</div>
<div id="footerdiv">
<table cellpadding="0" cellspacing="0" height="305" width="1400">
<tr>
<td><div id="footert1">
<table height="220" width="350">
<tr><td height="60"><b style="position:relative; left:55px; ">MENU 1</b></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 1</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 2</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 3</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 4</label></a></td></tr>
</table>
</div></td>
<td><div id="footert2">
<table height="220" width="350">
<tr><td height="60"><b style="position:relative; left:55px; ">MENU 2</b></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 1</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 2</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 3</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 4</label></a></td></tr>
</table>
</div></td>
<td><div id="footert3">
<table height="220" width="350">
<tr><td height="60"><b style="position:relative; left:55px; ">MENU 3</b></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 1</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 2</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 3</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 4</label></a></td></tr>
</table>
</div></td>
<td><div id="footert4">
<table height="220" width="350">
<tr><td height="60"><b style="position:relative; left:55px; ">MENU 4</b></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 1</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 2</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 3</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 4</label></a></td></tr>
</table>
</div></td>
</tr>
</table>
</div>
</div>
</div>
</center>
<body>
</body>
</html>
