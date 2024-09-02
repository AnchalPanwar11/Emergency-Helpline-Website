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
<div id="headerdiv"><label style="position:relative; color:#FFFFFF; top:16px; font-size:24px"><b>EMERGENCY SYSTEM INFORMATION</b></label></div>
<div id="bodydiv">
<table cellpadding="0" cellspacing="0" height="550" width="1250">
<tr>
<td valign="top" width="300">
<div id="table1">
<table cellpadding="0" cellspacing="0" height="550" width="300">
<tr><td height="40"></td></tr>
<tr><td><div id="table2a"></div></td></tr>
<tr><td><div id="table1a"><a href="ESmainwebpage.php" style="position:relative;"><center>Menu</center></a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr>
<tr><td><div id="table1a"><a href="ESprofileentry.php" style="position:relative;"><center>Update Personal Information</center></a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr>
<tr><td><div id="table1a"><a href="EShospitalentry.php" style="position:relative;"><center>Update Hospital Information</center></a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr>
<tr><td><div id="table1a"><a href="ESpoliceentry.php" style="position:relative;"><center>Update police Station Information</center></a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr>
<tr><td><div id="table1a"><a href="ESfirestationentry.php" style="position:relative;"><center>Update Fire Station Information</center></a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr>
<tr><td><div id="table1a"><a href="ESpowerstaionentry.php" style="position:relative;"><center>Update Power Station Information</center></a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr>
<tr><td><div id="table1a"><a href="ESchildinfoentry.php" style="position:relative;"><center>Update Child Information</center></a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr>
<tr><td><div id="table1a"><a href="ESmainwebpageAboutus.php" style="position:relative;"><center>About us</center></a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr>
<tr><td><div id="table1a"><a href="ESmainwebpageContactus.php" style="position:relative;"><center>Contact us</center></a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr>
<tr><td><div id="table1a"><a href="ESAgentlogout.php" style="position:relative;"><center>logout</center></a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr>
</table>
</div>
</td>
<td width="950">


<?php
$a1=$_REQUEST['sc1'];
session_start();
$_SESSION['emrid']=$a1;
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
<div id="header1"><label style="position:relative; color:#FFF; top:10px; font-size:18px; left:380px"><b>Caller Information</b></label></div>
<div id="table2">
<table height="500" width="950">
<tr><td></td><td></td><td></td><td><b>Emergency ID</b></td><td><font color="#666666"><?php echo $row['EmergId']; ?></font></td><td></td><td></td></tr>
<tr><td rowspan="3"></td><td><b>Caller's Name</b></td><td><font color="#666666"><?php echo $row['CallerName']; ?></font></td><td><b>Father's Name</b></td><td><font color="#666666"><?php echo $row['FatherName']; ?>[</font></td><td><b>Mother's Name</b></td><td><font color="#666666"><?php echo $row['MotherName']; ?></font></td></tr>
<tr><td><b>Caller's Age</b></td><td><font color="#666666"><?php echo $row['CallerAge']; ?></font></td><td><b>Father's Age</b></td><td><font color="#666666"><?php echo $row['FatherAge']; ?></font></td><td><b>Mother's Age</b></td><td><font color="#666666"><?php echo $row['MotherAge']; ?></font></td></tr>
<tr><td><b>Caller's Blood Group</b></td><td><font color="#666666"><?php echo $row['callerBG']; ?></font></td><td><b>Father's Blood Group</b></td><td><font color="#666666"><?php echo $row['FaherBG']; ?></font></td><td><b>Mother's Blood Group</b></td><td><font color="#666666"><?php echo $row['MotherBG']; ?></font></td></tr>
<tr><td></td><td><b>Caller's Adhaar No.</b></td><td><font color="#666666"><?php echo $row['callerAN']; ?></font></td><td><b>Father's Adhaar No.</b></td><td><font color="#666666"><?php echo $row['FatherAN']; ?></font></td><td><b>Mother'sAdhaar No.</b></td><td><font color="#666666"><?php echo $row['MotherAN']; ?></font></td></tr>
<tr><td></td><td><b>State</b></td><td><font color="#666666"><?php echo $row['State']; ?></font></td><td><b>District</b></td><td><font color="#666666"><?php echo $row['district']; ?></font></td><td><b>STR/Mohalla</b></td><td><font color="#666666"><?php echo $row['STr']; ?></font></td></tr>
<tr><td></td><td><b>Home No.</b></td><td><font color="#666666"><?php echo $row['HomeNo']; ?></font></td><td><b>Telephone No.</b></td><td><font color="#666666"><?php echo $row['TelNo']; ?></font></td><td><b>Password</b></td><td><font color="#666666"><?php echo $row['enterPass']; ?></font></td><td></td></tr>
</table>
</div>
<div id="header1"><label style="position:relative; color:#FFF; top:10px; font-size:18px; left:380px"><b>Hospital Information</b></label></div>
<div id="table2">
<table height="500" width="950">
<tr><td width="200"></td><td><b>Hospital Information</b></td><td><font color="#666666"><?php echo $row['HospInfo']; ?></font></td><td  width="180"></td></tr>
<tr><td></td><td><b>Emergency No</b></td><td><font color="#666666"><?php echo $row['EmergId']; ?></font></td><td></td></tr>
<tr><td></td><td><b>Name of Hospital</b></td><td><font color="#666666"><?php echo $row['HName'] ;?></font></td><td></td></tr>
<tr><td></td><td><b>Name of 2nd Hospital</b></td><td><font color="#666666"><?php echo $row['H2Name'] ;?></font></td><td></td></tr>
<tr><td></td><td><b>Ambulance Phone No</b></td><td><font color="#666666"><?php echo $row['AmbNo'] ;?></font></td><td></td></tr>
<tr><td></td><td><b>Distance 1</b></td><td><font color="#666666"><?php echo $row['Distance1']; ?></font></td><td></td></tr>
<tr><td></td><td><b>Distance 2</b></td><td><font color="#666666"><?php echo $row['Distance2']; ?></font></td><td></td></tr>
<tr><td></td><td><b>Hospital 1 Phone No</b></td><td><font color="#666666"><?php echo $row['H1PhnNo']; ?></font></td><td></td></tr>
<tr><td></td><td><b>Hospital 2 Phone No</b></td><td><font color="#666666"><?php echo $row['H2PhnNo']; ?></font></td><td></td></tr>
</table>
</div>
<div id="header1"><label style="position:relative; color:#FFF; top:10px; font-size:18px; left:380px"><b>Police Station Information</b></label></div>
<div id="table2">
<table height="500" width="950">
<tr><td width="200"></td><td><b>Police Station Details</b></td><td><font color="#666666"><?php echo $row['PSdet'] ?></font></td><td  width="180"></td></tr>
<tr><td></td><td><b>Name of Police Station</b></td><td><font color="#666666"><?php echo $row['PSName']; ?></font></td><td></td></tr>
<tr><td></td><td><b>Control Room</b></td><td><font color="#666666"><?php echo $row['ControlRoomNo']; ?></font></td><td></td></tr>
<tr><td></td><td><b>Emergency No</b></td><td><font color="#666666"><?php echo $row['EmergId']; ?></font></td><td></td></tr>
<tr><td></td><td><b>Distance </b></td><td><font color="#666666"><?php echo $row['Distance']; ?></font></td><td></td></tr>
<tr><td></td><td><b>CO City Phone No</b></td><td><font color="#666666"><?php echo $row['COPhnNo']; ?></font></td><td></td></tr>
<tr><td></td><td><b>Caller ID</b></td><td><font color="#666666"><?php echo $row['CallerID']; ?></font></td><td></td></tr>
</table>
</div>
<div id="header1"><label style="position:relative; color:#FFF; top:10px; font-size:18px; left:380px"><b>Fire Station Information</b></label></div>
<div id="table2">
<table height="500" width="950">
<tr><td width="200"></td><td><b>Emergency ID</b></td><td><font color="#666666"><?php echo $row['EmergId']; ?></font></td><td  width="180"></td></tr>
<tr><td></td><td><b>Location of Fire Station</b></td><td><font color="#666666"><?php echo $row['FSLoc']; ?></font></td><td></td></tr>
<tr><td></td><td><b>Fire Station Phone No</b></td><td><font color="#666666"><?php echo $row['FSPhnNo']; ?></font></td><td></td></tr>
<tr><td></td><td><b>Distance of Fire Station</b></td><td><font color="#666666"><?php echo $row['FSDistance']; ?></font></td><td></td></tr>
<tr><td></td><td><b>Other No Fire Station</b></td><td><font color="#666666"><?php echo $row['otherFSNo']; ?></font></td><td></td></tr>
</table>
</div>
<div id="header1"><label style="position:relative; color:#FFF; top:10px; font-size:18px; left:380px"><b>Power Station Information</b></label></div>
<div id="table2">
<table height="500" width="950">
<tr><td width="200"></td><td><b>Emergency ID</b></td><td><font color="#666666"><?php echo $row['EmergId']; ?></font></td><td  width="180"></td></tr>
<tr><td></td><td><b>Location of Power Station</b></td><td><font color="#666666"><?php echo $row['POLoc']; ?></font></td><td></td></tr>
<tr><td></td><td><b>Power Station Phone No</b></td><td><font color="#666666"><?php echo $row['POPhnNo']; ?></font></td><td></td></tr>
<tr><td></td><td><b>Name of S.D.E</b></td><td><font color="#666666"><?php echo $row['SDEName']; ?></font></td><td></td></tr>
<tr><td></td><td><b>S.D.E Phone No</b></td><td><font color="#666666"><?php echo $row['SDEPhnNo']; ?></font></td><td></td></tr>
<tr><td></td><td><b>Name of J.E</b></td><td><font color="#666666"><?php echo $row['JEName'] ;?></font></td><td></td></tr>
<tr><td></td><td><b>J.E Phone No</b></td><td><font color="#666666"><?php echo $row['JEPhnNo']; ?></font></td><td></td></tr>
</table>
</div>
<div id="header1"><label style="position:relative; color:#FFF; top:10px; font-size:18px; left:380px"><b>Child Information</b></label></div>
<div id="table2">
<table height="500" width="950">
<tr><td width="20"></td><td><b>Children Information of Caller</b></td><td><font color="#666666"><?php echo $row['CIcaller'] ?></font></td><td width="60"></td><td><b>Emergency ID</b></td><td><font color="#666666"><?php echo $row['EmergId'] ?></font></td><td></td>
</tr><tr><td></td></tr>
<tr><td></td><td><b>Name</b></td><td><font color="#666666"><?php echo $row['CName1']; ?></font></td><td></td><td><b>Age</b></td><td><font color="#666666"><?php echo $row['CAge1']; ?></font></td><td><b>Blood Group</b></td><td><font color="#666666"><?php echo $row['CBG1']; ?></font></td><td></td></tr>
<tr><td></td><td><b>Name</b></td><td><font color="#666666"><?php echo $row['CName2']; ?></font></td><td></td><td><b>Age</b></td><td><font color="#666666"><?php echo $row['CAge2']; ?></font></td><td><b>Blood Group</b></td><td><font color="#666666"><?php echo $row['CbG2']; ?></font></td><td></td></tr>
<tr><td></td><td><b>Name</b></td><td><font color="#666666"><?php echo $row['CName3']; ?></font></td><td></td><td><b>Age</b></td><td><font color="#666666"><?php echo $row['CAge3']; ?></font></td><td><b>Blood Group</b></td><td><font color="#666666"><?php echo $row['CBG3']; ?></font></td><td></td></tr>
</table>
</div>
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
