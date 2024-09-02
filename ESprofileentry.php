<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="emergencysyustemcss1.css" rel="stylesheet" type="text/css">
</head>
<center>
<form method="post" action="ESphp.php">
<div id="maindiv">
<div id="headerdiv">
<label style="position:relative; font-size:26px; top:8px; color:#FFFFFF"><b>PERSONAL INFORMATION</b></label>
</div>
<div id="bodydiv2">
<table cellpadding="0" cellspacing="0" height="550" width="1400">
<tr>
<td valign="top" width="350">
<div id="table1">
<table cellpadding="0" cellspacing="0" height="477" width="350">
<tr><td><div id="table2a"></div></td></tr>
<tr><td><div id="table1a"><a href="ESmainwebpage.php" style="position:relative;"><center>Home</center></a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr>
<tr><td><div id="table1a"><a href="#" style="position:relative;"><center>Edit Profile</center></a></div></td></tr>
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
<tr><td><div id="table1a"><a href="https://services.india.gov.in" style="position:relative;"><center>Website</center></a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr> 
<tr><td><div id="table1a"><a href="www.india.govt.in" style="position:relative;"><center>Website</center></a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr>
<tr><td><div id="table1a"><a href="https://www.mygov.in" style="position:relative;"><center>Website</center></a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr>
<tr><td><div id="table1a"><a href="ESAgentlogout.php" style="position:relative;"><center>logout</center></a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr>
</table>
</div>
</td>
<td width="950">
<?php
session_start();
$id=$_SESSION['emrid'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("could not connect to server".mysql_error());
}
mysql_select_db("myphpproject",$con);
$res=mysql_query("select *from esdetail where EmergId=$id");
if($row=mysql_fetch_array($res))
{
?>
<div id="table2">
<table height="550" width="1050">
<tr><td width="120"></td><td><b>Emergency ID</b></td><td><font color="#999999"><?php echo $row['EmergId']; ?></font></td><td><b>Mobile Number</b></td><td><input type="number" value="<?php echo $row['MobNo']; ?>" name="e2"></td><td width="105"></td></tr>
<tr><td></td><td><b>Caller Name</b></td><td><input type="text" value="<?php echo $row['CallerName']; ?>" name="e3"></td><td><b>Caller's Age</b></td><td><input type="number" value="<?php echo $row['CallerAge']; ?>" name="e4"></td><td><b>Adhaar No.</b></td>
<td><input type="number" value="<?php echo $row['callerAN']; ?>" name="e5" /></td><td></td></tr>
<tr><td></td><td><b>Father Name</b></td><td><input type="text" value="<?php echo $row['FatherName']; ?>"  name="e6"></td><td><b>Father's Age</b></td><td><input type="number" value="<?php echo $row['FatherAge']; ?>" name="e7"></td><td><b>Adhaar No.</b></td>
<td><input type="number" value="<?php echo $row['FatherAN']; ?>" name="e8" /></td></td><td></td></tr>
<tr><td></td><td><b>Mother Name</b></td><td><input type="text"value="<?php echo $row['MotherName']; ?>" name="e9"></td><td><b>Mother's Age</b></td><td><input type="number" value="<?php echo $row['MotherAge']; ?>" name="e10"></td><td><b>Adhaar No.</b></td>
<td><input type="number" value="<?php echo $row['MotherAN']; ?>" name="e11" /></td></td><td></td></tr>
<tr><td></td><td><b>State</b></td><td><select name="e12">
<?php
$st=$row['State'];
if($st=="Uttarakhand")
{
?>
<option selected="selected">Uttarakhand</option>
<option>Uttarpradesh</option>
<option>Haryana</option>
<?php
}
else if($st=="Uttarpradesh")
{
?>
<option>Uttarakhand</option>
<option selected="selected">Uttarpradesh</option>
<option>Haryana</option>
<?php
}
else if($st=="Haryana")
{
?>
<option>Uttarakhand</option>
<option>Uttarpradesh</option>
<option selected="selected">Haryana</option>
<?php
}
?>
</select></td><td>
<b>Caller's Blood Group</b></td><td><select name="e13">
<?php
$bg=$row['callerBG'];
if($bg=="A+")
{
?>
<option selected="selected">A+</option>
<option>A-</option>
<option>AB+</option>
<option>AB-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<?php
}
else if($bg=="A-")
{
?>
<option>A+</option>
<option selected="selected">A-</option>
<option>AB+</option>
<option>AB-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<?php
}
else if($bg=="AB+")
{
?>
<option>A+</option>
<option>A-</option>
<option selected="selected">AB+</option>
<option>AB-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<?php
}
else if($bg=="AB-")
{
?>
<option>A+</option>
<option>A-</option>
<option>AB+</option>
<option selected="selected">AB-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<?php
}
else if($bg=="B+'")
{
?>
<option>A+</option>
<option>A-</option>
<option>AB+</option>
<option>AB-</option>
<option selected="selected">B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<?php
}
else if($bg=="B-")
{
?>
<option>A+</option>
<option>A-</option>
<option>AB+</option>
<option>AB-</option>
<option>B+</option>
<option selected="selected">B-</option>
<option>O+</option>
<option>O-</option>
<?php
}
else if($bg=="O+'")
{
?>
<option>A+</option>
<option>A-</option>
<option>AB+</option>
<option>AB-</option>
<option>B+</option>
<option>B-</option>
<option selected="selected">O+</option>
<option>O-</option>
<?php
}
else if($bg=="O-")
{
?>
<option>A+</option>
<option>A-</option>
<option>AB+</option>
<option>AB-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option selected="selected">O-</option>
<?php
}
?>

</select></td><td></td></tr>
<tr><td></td><td><b>District</b></td><td><select name="e14">
<?php
$ct=$row['district'];
if($ct=="Dehradun")
{
?>
<option selected="selected">Dehradun</option>
<option>Allahbad</option>
<option>Haridwar</option>
<?php
}
else if($ct=="Allahbad")

{
?>
<option>Dehradun</option>
<option selected="selected">Allahbad</option>
<option>Haridwar</option>
<?php
}
else if($ct=="Haridwar")
{
?>
<option>Dehradun</option>
<option>Allahbad</option>
<option selected="selected">Haridwar</option>
<?php
}
?>





</select></td><td><b>Father's Blood Group</b>
</td><td><select name="e15">
<?php
$bg=$row['FaherBG'];
if($bg=="A+")
{
?>
<option selected="selected">A+</option>
<option>A-</option>
<option>AB+</option>
<option>AB-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<?php
}
else if($bg=="A-")
{
?>
<option>A+</option>
<option selected="selected">A-</option>
<option>AB+</option>
<option>AB-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<?php
}
else if($bg=="AB+")
{
?>
<option>A+</option>
<option>A-</option>
<option selected="selected">AB+</option>
<option>AB-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<?php
}
else if($bg=="AB-")
{
?>
<option>A+</option>
<option>A-</option>
<option>AB+</option>
<option selected="selected">AB-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<?php
}
else if($bg=="B+'")
{
?>
<option>A+</option>
<option>A-</option>
<option>AB+</option>
<option>AB-</option>
<option selected="selected">B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<?php
}
else if($bg=="B-")
{
?>
<option>A+</option>
<option>A-</option>
<option>AB+</option>
<option>AB-</option>
<option>B+</option>
<option selected="selected">B-</option>
<option>O+</option>
<option>O-</option>
<?php
}
else if($bg=="O+'")
{
?>
<option>A+</option>
<option>A-</option>
<option>AB+</option>
<option>AB-</option>
<option>B+</option>
<option>B-</option>
<option selected="selected">O+</option>
<option>O-</option>
<?php
}
else if($bg=="O-")
{
?>
<option>A+</option>
<option>A-</option>
<option>AB+</option>
<option>AB-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option selected="selected">O-</option>
<?php
}
?>
</select></td><td></td></tr>
<tr><td></td><td><b>Telephone No.</b></td><td><input type="text" value="<?php echo $row['TelNo']; ?>" name="e16"></td><td><b>Mother's Blood Group</b></td><td><select name="e17">

<?php
$bg=$row['MotherBG'];
if($bg=="A+")
{
?>
<option selected="selected">A+</option>
<option>A-</option>
<option>AB+</option>
<option>AB-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<?php
}
else if($bg=="A-")
{
?>
<option>A+</option>
<option selected="selected">A-</option>
<option>AB+</option>
<option>AB-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<?php
}
else if($bg=="AB+")
{
?>
<option>A+</option>
<option>A-</option>
<option selected="selected">AB+</option>
<option>AB-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<?php
}
else if($bg=="AB-")
{
?>
<option>A+</option>
<option>A-</option>
<option>AB+</option>
<option selected="selected">AB-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<?php
}
else if($bg=="B+'")
{
?>
<option>A+</option>
<option>A-</option>
<option>AB+</option>
<option>AB-</option>
<option selected="selected">B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<?php
}
else if($bg=="B-")
{
?>
<option>A+</option>
<option>A-</option>
<option>AB+</option>
<option>AB-</option>
<option>B+</option>
<option selected="selected">B-</option>
<option>O+</option>
<option>O-</option>
<?php
}
else if($bg=="O+'")
{
?>
<option>A+</option>
<option>A-</option>
<option>AB+</option>
<option>AB-</option>
<option>B+</option>
<option>B-</option>
<option selected="selected">O+</option>
<option>O-</option>
<?php
}
else if($bg=="O-")
{
?>
<option>A+</option>
<option>A-</option>
<option>AB+</option>
<option>AB-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option selected="selected">O-</option>
<?php
}
?>

</select></td><td></td></tr>
<tr><td></td><td><b>STR/Mohalla</b></td><td><input type="text" value="<?php echo $row['STr']; ?>" name="e18"></td><td><b>Home No.</b></td><td><input type="number" value="<?php echo $row['HomeNo']; ?>" name="e19"></td><td></td></tr>
</table>
</div>
<?php
}
?>
</td>
</tr>
</table>
<div id="linediv"></div>
<div id="bodydiv8">
<table height="150" width="1450">
<tr><td colspan="5"><label style="position:relative; color:#000000; font-size:24px; "><center><b>FOLLOW US ON WEB</b></center></label></td></tr>
<tr>
<td><div id="bodydiv8t"><a href="#" style="position:relative; font-size:18px; top:12px"><center><b>Instagram</b></center></a></div></td>
<td><div id="bodydiv8t"><a href="#" style="position:relative; font-size:18px; top:12px"><center><b>Twitter</b></center></a></div></td>
<td><div id="bodydiv8t"><a href="#" style="position:relative; font-size:18px; top:12px"><center><b>Facebook</b></center></a></div></td>
<td><div id="bodydiv8t"><a href="#" style="position:relative; font-size:18px; top:12px"><center><b>LinkedIn</b></center></a></div></td>
<td><div id="bodydiv8t"><a href="#" style="position:relative; font-size:18px; top:12px"><center><b>Youtube</b></center></a></div></td>
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
</form>
</center>
<body>
</body>
</html>